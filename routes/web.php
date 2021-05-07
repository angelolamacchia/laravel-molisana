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

    $pasta = config('pasta');

    // $pasta_lunga = array_filter($pasta, function($element){
    //     return $element['tipo']=='lunga';
    // });
    // $pasta_corta = array_filter($pasta, function($element){
    //     return $element['tipo']=='corta';
    // });
    // $pasta_cortissima = array_filter($pasta, function($element){
    //     return $element['tipo']=='cortissima';
    // });

    $collection = collect($pasta);

    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    $data = ['formati' => [
                    'lunga'=>$pasta_lunga,
                    'corta'=>$pasta_corta,
                    'cortissima'=>$pasta_cortissima,
                ]    
            ];

    return view('pages.products', $data);

})->name('pagina-prodotti');

Route::get('/dettaglio/{id}', function($id) {

    $pasta = config('pasta');

    $data = [
        'formato' => $pasta[$id],
        'id' => $id
    ];

    return view('pages.details', $data);
})->name('pagina-dettagli');
