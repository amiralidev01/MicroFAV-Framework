<?php

namespace app\Utilities;

class Url
{
    public static function current_route()
    {
        return strtok($_SERVER['REQUEST_URI'], '?');
    }
}