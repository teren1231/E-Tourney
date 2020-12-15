<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'MyController@CallGames')->name('home');

Route::get('/news/{id}', 'MyController@CallBerita')->name('news');

Route::get('/tournament/{id}', 'MyController@CallTournament')->name('tournament');