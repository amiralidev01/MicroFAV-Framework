<?php namespace app\Utilities;

class Asset
{
    public static function get($route)
    {
        return $_ENV['HOST'] . '/assets/' . $route;
    }
}