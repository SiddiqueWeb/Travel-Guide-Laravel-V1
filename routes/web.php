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


//Login Controller
Route::get('/login','LoginController@index')->name('Home.login');
Route::post('/login','LoginController@loginVerification');

Route::get('/Registration','HomeController@index')->name('Home.Registration');
Route::post('/Registration','HomeController@Store');
