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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/register', 'RegisterController@index');
Route::post('/register/create', 'RegisterController@create');
Route::get('/register/{id}/edit', 'RegisterController@edit');
Route::post('/register/{id}/update', 'RegisterController@update');
Route::get('/register/{id}/delete', 'RegisterController@delete');