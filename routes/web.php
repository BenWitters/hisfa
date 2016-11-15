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


use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\ViewDashboard;
use App\Http\Middleware\ViewSilos;
use Illuminate\Auth\Middleware\Authenticate;

Auth::routes();

//dashboard
Route::get('/', 'HomeController@index')->middleware(Authenticate::class, ViewDashboard::class);



// silos
// Route::get('/', 'SilosController@index');
//Route::get('/', 'WasteController@index');

Route::get('/', 'HomeController@index');


//Route::get('/waste', "WasteController@index");

Route::get('/silos', "SilosController@index")->middleware(Authenticate::class, ViewSilos::class);
Route::delete('/silos/{id}', "PrimesiloController@delete");
Route::resource('waste', 'WasteController');

//Route::get('/silos', "PrimesiloController@index");
//Route::delete('/silos/{id}', "PrimesiloController@delete");



// blocks
Route::get('/blocks', 'BlockController@index')->middleware(Authenticate::class);
Route::post('/blocks/addLength', 'BlockController@addLength');

//Route::get('/blocktypes', "BlockTypeController@index");
//Route::get('/blocktypes/create', "BlockTypeController@create");
//Route::post('/blocktypes', 'BlockTypeController@store');
//Route::get('/blocktypes', "BlockTypeController@index");


//materials
Route::resource('blocktypes', 'BlockTypeController');



Route::resource('materialtypes', 'MaterialTypeController');
Route::resource('waste', 'WasteController');

Route::resource('materials', 'MaterialController');
Route::resource('primesilo', 'PrimesiloController');

//octabins
Route::post('/materialtypes/{id}/octabin', 'MaterialTypeController@addOctabin');
Route::delete('/materialtypes/{id}/octabin', 'MaterialTypeController@deleteOctabin');

Route::get('/users/manage', function () {
    return view('users/list');
});


// manage account routes
Route::get('/manageaccounts', 'ManageAccountController@index')->middleware(Authenticate::class, IsAdmin::class);
Route::get('/manageaccounts/add', 'ManageAccountController@indexAddAccount')->middleware(Authenticate::class, IsAdmin::class);
Route::get('/manageaccounts/{id}', 'ManageAccountController@show')->middleware(Authenticate::class, IsAdmin::class);
Route::post('/manageaccounts/create', 'ManageAccountController@create');
Route::post('/manageaccounts/updateAccountSettings', 'ManageAccountController@update');

// account routes
Route::get('/account', "UserController@index")->middleware(Authenticate::class);
Route::get('/account/logout', "UserController@logout");
Route::post('/account/updatePassword', "UserController@updatePassword");
Route::post('/account/updateProfilePicture', "UserController@changeProfilePicture");
Route::post('/account/updateNotificationSettings', 'UserController@updateNotificationSettings');
