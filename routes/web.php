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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('/bebes', function () {
    return view('frontend.bebes');
})->name('bebes');

Route::get('/cumpleaños', function () {
    return view('frontend.cumpleaños');
})->name('cumpleaños');

Route::get('/eventos', function () {
    return view('frontend.eventos');
})->name('eventos');

Route::get('/aniversarios', function () {
    return view('frontend.aniversarios');
})->name('aniversarios');

Route::get('/graduaciones', function () {
    return view('frontend.graduaciones');
})->name('graduaciones');

Auth::routes();

Route::get('/panel', 'HomeController@index')->name('panel');
