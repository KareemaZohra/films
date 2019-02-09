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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/film', 'PagesController@film')->name('films');
Route::get('/single', 'PagesController@single')->name('slug');
Route::get('/create', 'PagesController@create')->name('create');
Route::post('/store', 'PagesController@store')->name('store');
Route::get('/film/{slug}', 'PagesController@single')->name('single');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
