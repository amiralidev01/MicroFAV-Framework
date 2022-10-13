<?php

use app\Core\StupidRouter;

# Front Controller
include "bootstrap/init.php";

$router = new StupidRouter();
$router->run();