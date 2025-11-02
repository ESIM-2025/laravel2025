<?php

use Illuminate\Support\Facades\Route;

// Rutas del tutorial de validación - Grupo 9
Route::prefix('validacion')->group(function () {
    // Página principal del tutorial
    Route::get('/tutorial', function () {
        return view('validacion.tutorial');
    })->name('validacion.tutorial');

    // Formulario de demostración
    Route::get('/demo', function () {
        return view('validacion.demo');
    })->name('validacion.demo');

    // Procesar el formulario de demostración
    Route::post('/procesar', function (Illuminate\Http\Request $request) {
        // Validación de los datos
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'email' => 'required|email',
            'edad' => 'required|integer|min:18|max:100',
            'sitio_web' => 'nullable|url',
            'password' => 'required|min:6|confirmed'
        ], [
            'nombre.required' => 'El campo nombre es obligatorio',
            'email.email' => 'Debe ingresar un email válido',
            'edad.min' => 'Debe ser mayor de 18 años',
            'password.confirmed' => 'Las contraseñas no coinciden'
        ]);

        // Aquí normalmente procesaríamos los datos
        // Por ejemplo: User::create($validated);
        
        // Por ahora solo redirigimos con mensaje de éxito
        return back()->with('success', '¡Formulario validado correctamente! Los datos son válidos.');
        
    })->name('validacion.procesar');

    // Ejemplos adicionales
    Route::get('/ejemplos', function () {
        return view('validacion.ejemplos');
    })->name('validacion.ejemplos');
});

// Ruta de inicio que redirige al tutorial
Route::get('/', function () {
    return redirect()->route('validacion.tutorial');
});