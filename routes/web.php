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

Route::get('/', 'HomeController@index');
Route::resource('blog', 'BlogController');
Route::resource('vlog', 'VlogController');
Route::get('service/{mainservice}', 'ServiceController@index');
Route::get('service/{mainservice}/{service}', 'ServiceController@show');
Route::resource('lid', 'LidController');
Route::resource('contact', 'ContactController');
Route::get('category/{name}', 'CategoryController@show');
Route::get('tag/{name}', 'TagController@show');
