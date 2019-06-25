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

Route::get('/profile/{id}', 'ProfileController@profile')->name('profile');

//--------------------------------------------------------------xu ly admin--------------------------------------------------------------

// Route index Category Admin
Route::get('admin/category', 'CategoryController@index_category')->name('index_category');

//----------------------------------------------------------------------------------------------
// Add Category
Route::get('admin/category/create', 'CategoryController@create')->name('create_category');
Route::post('admin/category/create', 'CategoryController@add')->name('add_category');

// Edit Category
Route::get('admin/category/update/{id}', 'CategoryController@update')->name('update_category');
Route::post('admin/category/update/{id}', 'CategoryController@edit')->name('edit_category');

// Remove Category
Route::get('admin/category/remove/{id}', 'CategoryController@remove')->name('remove_category');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route index Comment Admin
Route::get('admin/comment', 'CommentController@index_comment')->name('index_comment');

// Remove Comment
Route::get('admin/comment/remove/{id}', 'CommentController@remove')->name('remove_comment');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route index Setting Admin
Route::get('admin/setting', 'SettingController@index_setting')->name('index_setting');

// Route edit Setting Admin
Route::get('admin/setting/edit/{id}', 'SettingController@update')->name('update_setting');
Route::post('admin/setting/edit/{id}', 'SettingController@edit')->name('edit_setting');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route index Comment Admin
Route::get('admin/user', 'UserController@index_user')->name('index_user');

//Route add user
Route::get('admin/user/add', 'UserController@create')->name('create_user');

//Route edit user
Route::get('admin/user/edit/{id}', 'UserController@update')->name('update_user');

//----------------------------------------------------------------------------------------------

//--------------------------------------------------------------end xu ly admin--------------------------------------------------------------
