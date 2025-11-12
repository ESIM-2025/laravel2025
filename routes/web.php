<?php

use Illuminate\Support\Facades\Route;

/*
| Le decimos a Laravel que cuando el usuario visite la
| raíz del sitio ('/'), debe cargar la vista
| llamada 'tutorial-mvc'
*/
Route::get('/', function () {
    return view('tutorial-mvc');
});