<?php

/*
|--------------------------------------------------------------------------
| Web Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your admin users in your
| application. These routes are loaded by the RouteServiceProvider
| within a group which contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', 'HomeController@index')->name('home');

// User management routes
Route::get('/users', 'Users\UsersController@index')->name('users.index');