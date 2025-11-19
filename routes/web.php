<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelosExplicacionController;


Route::get('/tutorial-blade', function () {
    return view('tutorial-blade'); // usa el punto para indicar subcarpeta
});

// Rutas para el tutorial
Route::get('/tutorial-controller', ['app\Http\Controllers\TutorialController'::class, 'index']);

Route::get('/ejemplo-controller', [TutorialController::class, 'ejemplo']);

Route::get('/presentacion-nico', function () {return view('partials.nicolas'); });

Route::get('/explicacion-modelos', [ModelosExplicacionController::class, 'index']);

    

