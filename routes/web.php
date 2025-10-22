<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelosExplicacionController;



Route::get('/', function () {
    return view('partials.nicolas'); 
});
Route::get('/explicacion-modelos', [ModelosExplicacionController::class, 'index']);

