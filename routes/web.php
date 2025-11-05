<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tutorial-blade'); // usa el punto para indicar subcarpeta
});

