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
    $data = ['libreria'=> config('comics')]; 
    return view('index', $data);
})->name('p-home');

Route::get('/personaggi', function () {
    return view('characters');
})->name('p-characters');

Route::get('/fumetti', function () {
    $data = ['libreria'=> config('comics')];
    return view('comics',$data);
})->name('p-comics');

Route::get('/film', function () {
    return view('movies');
})->name('p-movies');

Route::get('/serie TV', function () {
    return view('tvseries');
})->name('p-tvseries');

Route::get('/giochi', function () {
    return view('games');
})->name('p-games');

Route::get('/collezionabili', function () {
    return view('collector');
})->name('p-collector');

Route::get('/video', function () {
    return view('video');
})->name('p-video');

Route::get('/fan', function () {
    return view('fans');
})->name('p-fans');

Route::get('/novità', function () {
    return view('news');
})->name('p-news');
