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

Route::get('/', 'IndexController@showUSD');

Route::get('/eur', 'IndexController@showEUR');

Route::get('/aud', 'IndexController@showAUD');

Route::get('/home', 'HomeController@index')->name('home');
