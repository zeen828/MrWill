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

Route::get('/', function () {
    return view('welcome');
});


Route::namespace('Games')->name('games.')->group(function () {
    Route::namespace('Magic')->name('magic.')->group(function () {
        Route::get('games/magic/playing/guess', 'PlayingController@guess')->name('guess');
    });
});
