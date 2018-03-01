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
Route::get('/', 'PhotosController@index')->name('home');

// photos
Route::get('/photos', 'PhotosController@index');
Route::get('/photos/{photo}', 'PhotosController@show');

// rates
Route::post('/rates/{photoId}/like', 'RatesController@like');
Route::post('/rates/{photoId}/dislike', 'RatesController@dislike');

// register user
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// login, logout
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

// user dashboard
Route::get('/users/{user}', 'UsersController@show');
