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
    return view('pages.home');
})->name('pagina-home');

Route::get('/contatti', function () {
    return view('pages.contacts');
})->name('pagina-contatti');

Route::get('/notizie', function () {
    return view('pages.news');
})->name('pagina-notizie');

Route::get('/prodotti', function () {
    return view('pages.products');
})->name('pagina-prodotti');
