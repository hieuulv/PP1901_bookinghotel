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

// Route index Category
Route::get('admin/category', 'CategoryController@index_category')->name('index_category');

// Add Category
Route::get('admin/category/create', 'CategoryController@create')->name('create_category');
Route::post('admin/category/create', 'CategoryController@add')->name('add_category');

// Edit Category
Route::get('admin/category/update{id}', 'CategoryController@update')->name('update_category');
Route::post('admin/category/update{id}', 'CategoryController@edit')->name('edit_category');

// Remove Category
Route::get('admin/category/remove{id}', 'CategoryController@remove')->name('remove_category');
