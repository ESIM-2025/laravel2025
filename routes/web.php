<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('partials.ludmila'); // usa el punto para indicar subcarpeta
});

