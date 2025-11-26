<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('partials.ludmila');
});

// Ruta para el tutorial de Middleware
// URL de acceso: /tutorial/middleware
Route::get('/tutorial/middleware', function () {
    return view('partials.middleware');
})->name('tutorial.middleware');

// Ruta de Oliver
Route::get('/oliver', function () {
    return view('partials.oliver');
});
Route::get('/test', function () {
    return view('test');
});
