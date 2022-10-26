<?php namespace app\Core\Routing;


use Exception;

class Route
{
//    private static $routes = [];
//
//
//    public static function add(array|string $method, string $uri, $action = null, array $middleware = []): void
//    {
//        $methods = is_array($method) ? $method : [$method];
//        self::$routes[] = [
//            'methods' => $methods,
//            'uri' => $uri,
//            'action' => $action,
//            'middleware' => $middleware
//        ];
//    }
//
//    /**
//     * @throws Exception
//     */
//    public static function __callStatic($name, $arguments)
//    {
//        $verbs = ['get', 'post', 'put', 'patch', 'delete', 'options'];
//        if (!in_array($name, $verbs))
//            throw new Exception('Request method not support!');
//        $uri = $arguments[0];
//        $action = $arguments[1] ?? null;
//        $middleware = $arguments[2] ?? [];
//        self::add($name, $uri, $action);
//    }
//
//    public static function routes(): array
//    {
//        return self::$routes;
//    }

    private static array $routes = [];

    public static function add(array|string $method, string $uri, $action = null, $middleware = [])
    {
        $methods = is_array($method) ? $method : [$method];
        self::$routes[] =
            [
                'methods' => $methods,
                'uri' => $uri,
                'action' => $action,
                'middleware' => $middleware
            ];
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function get($uri, $action = null, $middleware = []): void
    {
        self::add('get', $uri, $action, $middleware);
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function post($uri, $action = null, $middleware = []): void
    {
        self::add('post', $uri, $action, $middleware);
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function put($uri, $action = null, $middleware = []): void
    {
        self::add('put', $uri, $action, $middleware);
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function patch($uri, $action = null, $middleware = []): void
    {
        self::add('patch', $uri, $action, $middleware);
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function delete($uri, $action = null, $middleware = []): void
    {
        self::add('delete', $uri, $action, $middleware);
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function option($uri, $action = null, $middleware = []): void
    {
        self::add('option', $uri, $action, $middleware);
    }

    /**
     * @return array
     */
    public static function routes(): array
    {
        return self::$routes;
    }
}