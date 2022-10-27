<?php namespace app\Core\Routing;

use app\Core\Request;
use app\Core\Routing\Route;
use JetBrains\PhpStorm\NoReturn;

class Router
{
    private $request;
    private $routes;
    private $current_route;
    const BASE_CONTROLLER = '\app\Controllers\\';

    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
        #run middleware here
        $this->run_route_middleware();
    }

    public function run_route_middleware(): void
    {
        $middlewares = $this->current_route['middleware'];
        foreach ($middlewares as $middleware) {
            $middleware_obj = new $middleware;
            $middleware_obj->handle();
        }
    }

    public function findRoute(Request $request)
    {
        foreach ($this->routes as $route) {
            if (in_array($request->method(), $route['methods']) and $request->uri() == $route['uri']) {
                return $route;
            }
        }
        return null;
    }

    public function dispatch404(): void
    {
        header("HTTP/1.0 404 Not Found");
        view('errors.404');
        die;
    }

    public function run(): void
    {
        # 405 : invalid request method
        if ($this->isInvalidRequest($this->request)) {
            $this->dispatch405();
        }
        # 404 : uri not exists
        if (is_null($this->current_route)) {
            $this->dispatch404();
        }

        $this->dispath($this->current_route);

    }

    /**
     * @param Request $request
     * @return bool
     */
    private function isInvalidRequest(Request $request): bool
    {
        foreach ($this->routes as $route) {
            if (!in_array($request->method(), $route["methods"]) && $request->uri() === $route["uri"]) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return void
     */
    #[NoReturn] private function dispatch405(): void
    {
        header("HTTP/1.0 405 Method Not Allowed");
        die("invalid request method");
    }


    /**
     * @param $route
     * @return void
     */
    private function dispath($route): void
    {
        $action = $route['action'];
        # action : null
        if (is_null($action) or empty($action)) {
            return;
        }
        # action : closure = Anonymous Functions
        if (is_callable($action)) {
            $action();
        }
        # action : Controller@Method
        if (is_string($action)) {
            $action = explode('@', $action);
        }
        # action : ['Controller','Method']
        if (is_array($action)) {
            $class_name = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];
            if (!class_exists($class_name))
                throw new \Exception("Class :$class_name Not Exists!");
            $controller = new $class_name();
            if (!method_exists($controller, $method))
                throw new \Exception("Method :$method Not Exists in Class:$class_name!");
            $controller->{$method}();
        }
    }

}