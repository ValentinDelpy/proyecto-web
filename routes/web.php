<?php

use App\Teams;
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

Route::get('/', function () {
    $teams = Teams::all();
    return view('teams.teamIndex', compact('teams'));
});
Route::get('/home', function () {
    return view('welcome');
});

//Resources
Route::resource('champion','ChampionsController')->middleware('auth');
Route::resource('item','ItemsController');
Route::resource('team','TeamsController');

