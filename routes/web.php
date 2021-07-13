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
})->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/player', 'HomeController@player')->name('player');
Route::get('/lpassword', 'ViewControllers@lpassword')->name('lpassword');
Route::get('/highscore', 'ViewControllers@highscore')->name('highscore');
Route::get('/characters', 'ViewControllers@characters')->name('characters');
Route::get('/shop', 'ViewControllers@shop')->name('shop');


Route::name('rplayer')->post('/rplayer','ViewControllers@rplayer');
Route::name('fplayer')->post('/fplayer','ViewControllers@fplayer');
Route::name('cpassword')->post('/cpassword','ViewControllers@cpassword');
