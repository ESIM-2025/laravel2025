<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelController;



Route::get('/', function () {
    return view('partials.ludmila'); // usa el punto para indicar subcarpeta
});
Route::get('/', [ModelController::class, 'index']);

