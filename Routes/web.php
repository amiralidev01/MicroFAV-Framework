<?php

use app\Core\Routing\Route;

//Route::add(['get'], '/null');

//Route::add(['get', 'post'], '/', function () {
//    echo "Welcome";
//});
//
//Route::post('/saveForm', function () {
//    echo "save ok";
//});

//Route::get('\null');
//Route::get('/null');
//Route::get('all');'
Route::post('/gn',function (){
    echo "asff";
});
Route::get('/amir');
Route::add(['post', 'get'], '/a', function () {
    echo "Welcome!";
});

Route::add('get', '/hs');


//Route::get('/hasan');
//Route::add('post', '/ali');