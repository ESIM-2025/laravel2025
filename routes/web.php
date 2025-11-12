<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tutorial-blade'); // usa el punto para indicar subcarpeta
});

// Rutas para el tutorial
Route::get('/tutorial-controller', [TutorialController::class, 'index']);
Route::get('/ejemplo-controller', [TutorialController::class, 'ejemplo']);
  