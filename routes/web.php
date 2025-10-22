<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorageController;

Route::get('/', [StorageController::class, 'index'])->name('storage.index');
Route::get('/upload', [StorageController::class, 'create'])->name('storage.create');
Route::post('/upload', [StorageController::class, 'store'])->name('storage.store');
Route::get('/file/{disk}/{path}', [StorageController::class, 'show'])
    ->where('path', '.*')->name('storage.show');
Route::delete('/file', [StorageController::class, 'destroy'])->name('storage.destroy');
Route::get('/storage-info', function () {
    return view('storage-info');
});
