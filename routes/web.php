<?php

use App\Teams;
use App\Champions;
use App\Items;
use Illuminate\Http\Facades\Mail;

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
Route::get('/', function () {
    $teams = Teams::all();
    return view('teams.teamIndex', compact('teams'));
});

Route::get('/champions', function () {
    $champions = Champions::all();
    return view('champions.championIndex', compact('champions'));
});

Route::get('/teams', function () {
    $teams = Teams::all();
    return view('teams.teamIndex', compact('teams'));
});

Route::get('/items', function () {
    $items = Items::all();
    return view('items.itemIndex', compact('items'));
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('champion', 'ChampionsController');
    Route::resource('item', 'ItemsController');
    Route::get('team/{team}/created', 'TeamsController@notificateTeamCreated')->name('team.created');
    Route::resource('team', 'TeamsController');


    //File manager
    Route::post('file/load', 'FileController@upload')->name('file.upload');
    Route::get('file/{file}/download', 'FileController@download')->name('file.download');
    Route::post('file/{file}/delete', 'FileController@delete')->name('file.delete');
});

