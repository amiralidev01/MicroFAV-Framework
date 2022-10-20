<?php

# Front Controller
include "bootstrap/init.php";

$router = new \app\Core\Routing\Router();

$router->run();