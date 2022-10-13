<?php

# Front Controller
include "bootstrap/init.php";


$route = \app\Utilities\Url::current_route();
if ($route == "/colors/blue")
    include BASE_PATH . "views/Colors/blue.php";


if ($route == "/colors/red")
    include BASE_PATH . "views/Colors/red.php";


if ($route == "/colors/green")
    include BASE_PATH . "views/Colors/green.php";
