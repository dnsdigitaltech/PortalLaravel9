<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function () {
    Route::get('/sobre', 'Index')->name('pagina.sobre')->middleware('verifica');
    Route::get('/contato', 'ContatoMetodo')->name('pagina.contato');
});

// Route::get('/sobre', [DemoController::class, 'Index']);
// Route::get('/contato', [DemoController::class, 'ContatoMetodo']);

// Route::get('/contato', function () {
//     return view('contato');
// });
