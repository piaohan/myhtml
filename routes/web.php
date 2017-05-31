<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//前台
Route::group(array('namespace' => HOMENAME), function () {
    Route::resource('/', 'IndexController');
    Route::resource('/user', 'UserController');
});
//
////后台
Route::group(array('namespace' => ADMINNAME, 'prefix' => ADMIN), function () {
    Route::resource('/', 'IndexController');
    Route::resource('/users', 'UserController');
});