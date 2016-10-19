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


Auth::routes();

Route::get('/', 'WasteController@index');
Route::get('/account', "UserController@index");

Route::get('/silos', "PrimesiloController@index");


Route::get('/blocks', function () {
    return view('blocks/blocks');
});

//Route::get('/blocktypes', "BlockTypeController@index");
//Route::get('/blocktypes/create', "BlockTypeController@create");
//Route::post('/blocktypes', 'BlockTypeController@store');
//Route::get('/blocktypes', "BlockTypeController@index");
Route::resource('blocktypes', 'BlockTypeController');

Route::resource('materialtypes', 'MaterialTypeController');

Route::resource('waste', 'WasteController');


Route::get('/users/manage', function () {
    return view('users/list');
});

Route::get('/users/add', function () {
    return view('users/add');
});

Route::post('/account/updatePassword', "UserController@updatePassword");
Route::post('/account/updateProfilePicture', "UserController@changeProfilePicture");
Route::post('/account/updateNotificationSettings', 'UserController@updateNotificationSettings');
