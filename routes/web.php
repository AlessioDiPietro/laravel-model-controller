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

Route::get('/', 'DynController@home' )->name('p-home');

// dettagli fumetto selezionato
Route::get('/dettagli/{id}', 'DynController@det')->name('p-details');


Route::get('/personaggi','StaticController@charac' )->name('p-characters');

Route::get('/fumetti','StaticController@comic' )->name('p-comics');

Route::get('/film','StaticController@mov' )->name('p-movies');

Route::get('/serie TV','StaticController@serie' )->name('p-tvseries');

Route::get('/giochi','StaticController@game' )->name('p-games');

Route::get('/collezionabili','StaticController@collec' )->name('p-collector');

Route::get('/video','StaticController@video' )->name('p-video');

Route::get('/fan','StaticController@fan' )->name('p-fans');

Route::get('/novità','StaticController@new' )->name('p-news');
