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

Route::get('/','ChampionsController@index')->name('home');
Route::get('/home','ChampionsController@index')->name('home');
Route::get('createChampion','ChampionsController@create');
Route::get('champList','ChampionsController@index')->name('champList');
Route::get('championAdded','ChampionsController@store')->name('create-champion');
Route::resource('champ','ChampionsController');

Route::get('/','ItemsController@index')->name('home');
Route::get('/home','ItemsController@index')->name('home');
Route::get('createItem','ItemsController@create');
Route::get('itemList','ItemsController@index')->name('itemList');
Route::get('itemAdded','ItemsController@store')->name('create-item');
Route::resource('items','ItemsController');
