<?php namespace app\Core;

use app\Utilities\Url;

class StupidRouter
{
    private $routes;

    public function __construct()
    {
        $this->routes = [
            '/colors/blue' => 'Colors/blue.php',
            '/colors/red' => 'Colors/red.php',
            '/colors/green' => 'Colors/green.php'
        ];
    }

    public function run()
    {
        $current_route = Url::current_route();
        foreach ($this->routes as $route => $view) {
            if ($current_route == $route) {
                $this->includeAndDie(BASE_PATH . "views/$view");
            }
        }
        # 404 Header
        header("HTTP/1.0 404 Not Found");
        $this->includeAndDie(BASE_PATH . "views/errors/404.php");
    }

    private function includeAndDie($viewPath)
    {
        include $viewPath;
        die;
    }

}