<?php

use app\Core\Routing\Route;

Route::add(['get'], '/null');
Route::add(['get'], '/', function () {
    echo "Welcome";
});

Route::post('/saveForm', function () {
    echo "save ok";
});

