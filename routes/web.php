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


Auth::routes();
//Check Admin
Route::get('/admin', 'HomeController@admin')->middleware('CheckAdmin')->name('admin');

Route::get('/', 'HomeController@index')->name('index');

Route::get('/profile', 'HomeController@profile')->name('profile');
