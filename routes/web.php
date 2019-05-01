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


// Get Routes
Route::get('/', function () {
    return view('homepage');
});
Route::get('/login', 'UsersController@index');
Route::get('/signup', 'UsersController@signup');
Route::get('/logout', 'UsersController@logout');


// Post routes for writing to database
Route::post('/signup', 'UsersController@createUser');
Route::post('/login', 'UsersController@login');
Route::post('/edit', 'UsersController@store');

// Middleware to only allow logged in user access
Route::middleware(['authenticated'])->group(function() {
  Route::get('/profile', 'UsersController@profile');
  Route::get('/edit', 'UsersController@edit');
});

// Blank Pages
Route::get('/sports', 'MenuController@sports');
Route::get('/lifestyle', 'MenuController@lifestyle');
Route::get('/fashion', 'MenuController@fashion');
Route::get('/music', 'MenuController@music');
Route::get('/shop', 'MenuController@shop');
