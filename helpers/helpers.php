<?php

/**
 * @param $route
 * @return string
 */
function siteUrl($route): string
{
    return $_ENV['HOST'] . $route;
}

/**
 * @param $path
 * @return void
 */
function view($path): void# errors.404
{
    $path = str_replace('.', '/', $path);
    $view_full_path = BASE_PATH . "views/$path.php";
    include_once $view_full_path;
}