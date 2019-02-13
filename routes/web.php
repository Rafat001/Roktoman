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
Route::get('/donate',function() {
	return view('donation');
});

//home root
Route::get('/home','FrontController@index');
//register root
Route::get('/register','RegisterController@register');
//Register data to DB
Route::get('/newregistration','RegisterController@insert');
