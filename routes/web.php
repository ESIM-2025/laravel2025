<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelosExplicacionController;



Route::get('/presentacion-nico', function () {return view('partials.nicolas'); });

Route::get('/explicacion-modelos', [ModelosExplicacionController::class, 'index']);

    