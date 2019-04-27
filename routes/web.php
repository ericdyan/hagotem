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
    return view('homepage');
});

Route::get('/login', 'UsersController@index');
Route::get('/signup', 'UsersController@signup'); 
Route::get('/logout', 'UsersController@logout');

Route::post('/signup', 'UsersController@createUser');
Route::post('/login', 'UsersController@login');

Route::middleware(['authenticated'])->group(function() {
  Route::get('/profile', 'UsersController@profile');
});
