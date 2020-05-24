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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/question', 'HomeController@question')->middleware('auth');
Route::post('/question', 'HomeController@answer')->middleware('auth');
Route::get('/success', 'HomeController@success')->middleware('auth');

Auth::routes();