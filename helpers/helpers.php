<?php

function siteUrl($route)
{
    return $_ENV['HOST'] . $route;
}