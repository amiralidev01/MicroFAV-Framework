<?php

use app\Core\StupidRouter;
use app\Core\Request;

# Front Controller
include "bootstrap/init.php";

$request = new \app\Core\Request();
////var_dump($request->isset("name"));
//$request->redirect('/colors/blue');
var_dump($request);
$router = new StupidRouter();
$router->run();