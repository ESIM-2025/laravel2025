<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blade-info'); // <-- tu vista personalizada
});
