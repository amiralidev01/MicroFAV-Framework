<?php

use app\Core\Routing\Route;

Route::get('/archive', 'ArchiveController@index');
Route::get('/home', 'HomeController@index');


Route::add(['get', 'post', 'put'], '/', function () {
    echo "Welcome!";
});

Route::get('/saveForm', function () {
    echo "save Ok.";
});


Route::get('/todo/list', 'todoController@list', [\app\Middleware\BlockFirefox::class]);


Route::put('/c', ['Controller', 'Method']);

Route::get('/d', 'Controller@Method');

//var_dump(Route::routes());