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

<<<<<<< HEAD
Route::get('/', 'HomeController@index');
=======
//Route::get('/', 'WasteController@index');
>>>>>>> Kevin
Route::get('/account', "UserController@index");
Route::get('/waste', "WasteController@index");
Route::get('/silos', "PrimesiloController@index");
Route::delete('/silos/{id}', "PrimesiloController@delete");

Route::get('/blocks', 'BlockController@index');
Route::post('/blocks/addLength', 'BlockController@addLength');

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
