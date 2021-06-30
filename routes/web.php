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

/* Rutas del fronted en Español */
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


/* Rutas del fronted en Ingles */
    Route::get('/english', function () {
        return view('frontend.english');
    })->name('english');

    Route::get('/babies', function () {
        return view('frontend.babies');
    })->name('babies');

    Route::get('/birthday', function () {
        return view('frontend.birthday');
    })->name('birthday');

    Route::get('/events', function () {
        return view('frontend.events');
    })->name('events');

    Route::get('/anniversaries', function () {
        return view('frontend.anniversaries');
    })->name('anniversaries');

    Route::get('/graduations', function () {
        return view('frontend.graduations');
    })->name('graduations');

    Route::get('/msjenviado', function () {
        return view('frontend.msjenviado');
    })->name('msjenviado');


Auth::routes();

/* Route::get('/panel', 'HomeController@index')->name('panel'); */

Route::group(['prefix' => 'panel'], function () {

    Route::get('/', 'HomeController@index')->name('panel');

    Route::resource('mensajes', 'MensajeController');

});
