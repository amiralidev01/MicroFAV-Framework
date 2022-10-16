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

    public static function add(array|string $method, string $uri, $action = null)
    {
        $methods = is_array($method) ? $method : [$method];
        self::$routes[] =
            [
                'methods' => $methods,
                'uri' => $uri,
                'action' => $action
            ];
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function get($uri, $action = null): void
    {
//        self::$routes[] = ['get', 'uri' => $uri, 'action' => $action];
        self::add('get', $uri, $action);
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function post($uri, $action = null): void
    {
//        self::$routes[] = ['post', 'uri' => $uri, 'action' => $action];
        self::add('post', $uri, $action);
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function put($uri, $action = null): void
    {
        self::$routes[] = ['put', 'uri' => $uri, 'action' => $action];
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function patch($uri, $action = null): void
    {
        self::$routes[] = ['patch', 'uri' => $uri, 'action' => $action];
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function delete($uri, $action = null): void
    {
        self::$routes[] = ['delete', 'uri' => $uri, 'action' => $action];
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function option($uri, $action = null): void
    {
        self::$routes[] = ['option', 'uri' => $uri, 'action' => $action];
    }

    /**
     * @return array
     */
    public static function routes(): array
    {
        return self::$routes;
    }
}