<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('dashboard/dashboard');
});

Route::get('/silos', function () {
    return view('silos/silos');
});

Route::get('/blocks', function () {
    return view('blocks/blocks');
});

Route::get('/users/manage', function () {
    return view('users/list');
});

Route::get('/users/add', function () {
    return view('users/add');
});