<?php
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
Route::get('/artisan', fn() => view('artisan'));
