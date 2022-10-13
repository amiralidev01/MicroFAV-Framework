<?php namespace app\Core\Routing;


class Route
{
    private static array $routes = [];

    public static function add($methods, $uri, $action = null)
    {
        $methods = is_array($methods) ? $methods : [$methods];
        self::$routes[] = ['methods' => $methods, 'uri' => $uri, 'action' => $action];
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function get($uri, $action = null): void
    {
        self::$routes[] = ['get', 'uri' => $uri, 'action' => $action];
    }

    /**
     * @param $uri
     * @param $action
     * @return void
     */
    public static function post($uri, $action = null): void
    {
        self::$routes[] = ['post', 'uri' => $uri, 'action' => $action];
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