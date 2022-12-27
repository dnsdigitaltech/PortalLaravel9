<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(DemoController::class)->group(function () {
    Route::get('/sobre', 'Index');
    Route::get('/contato', 'ContatoMetodo');
});

// Route::get('/sobre', [DemoController::class, 'Index']);
// Route::get('/contato', [DemoController::class, 'ContatoMetodo']);

// Route::get('/contato', function () {
//     return view('contato');
// });
