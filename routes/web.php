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

Route::redirect('/', '/users');
Route::get('users', 'UserController@index')->name('users');
Route::get('user/{id}', 'UserController@show')->name('user.show');
Route::get('user-destroy/{id}', 'UserController@destroy')->name('user.destroy');
