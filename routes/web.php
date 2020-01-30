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
    return view('auth.login');
});

Route::get('login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin');
Route::get('registration', 'AuthController@registration')->name('register');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');
