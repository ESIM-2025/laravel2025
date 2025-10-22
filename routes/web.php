<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas del Tutorial de Validación - ESIM 2025
|--------------------------------------------------------------------------
*/

// Ruta principal - Página de inicio del tutorial
Route::get('/', function () {
    return view('validacion.tutorial');
});

// Tutorial de validación
Route::get('/tutorial-validacion', function () {
    return view('validacion.tutorial');
});

// Formulario práctico
Route::get('/formulario-validacion', function () {
    return view('validacion.formulario');
});

// Ejemplos de código
Route::get('/ejemplos-validacion', function () {
    return view('validacion.ejemplos');
});

// Procesar formulario con validación
Route::post('/procesar-formulario', function (\Illuminate\Http\Request $request) {
    
    // VALIDACIÓN DE DATOS - EJEMPLO PRÁCTICO
    $validated = $request->validate([
        'nombre' => 'required|string|max:255|min:3',
        'email' => 'required|email|max:255',
        'edad' => 'required|integer|min:17|max:60',
        'matricula' => 'required|string|size:10|regex:/^ESIM\d+$/',
        'carrera' => 'required|in:ingenieria,medicina,administracion',
        'mensaje' => 'nullable|string|max:1000',
        'terminos' => 'accepted'
    ], [
        // Mensajes personalizados
        'nombre.required' => 'El nombre es obligatorio.',
        'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'Debe ser un correo electrónico válido.',
        'edad.required' => 'La edad es obligatoria.',
        'edad.min' => 'Debes tener al menos 17 años.',
        'edad.max' => 'La edad máxima permitida es 60 años.',
        'matricula.required' => 'La matrícula es obligatoria.',
        'matricula.size' => 'La matrícula debe tener exactamente 10 caracteres.',
        'matricula.regex' => 'La matrícula debe empezar con ESIM seguido de números.',
        'carrera.required' => 'Debes seleccionar una carrera.',
        'carrera.in' => 'La carrera seleccionada no es válida.',
        'terminos.accepted' => 'Debes aceptar los términos y condiciones.'
    ]);

    // Simular guardado en base de datos
    $datosGuardados = [
        'nombre' => $validated['nombre'],
        'email' => $validated['email'],
        'edad' => $validated['edad'],
        'matricula' => $validated['matricula'],
        'carrera' => $validated['carrera'],
        'mensaje' => $validated['mensaje'] ?? 'Sin mensaje',
        'fecha_registro' => now()->format('Y-m-d H:i:s')
    ];

    // Redirigir con mensaje de éxito
    return redirect('/formulario-validacion')
           ->with('success', '✅ Formulario validado y procesado correctamente!')
           ->with('datos', $datosGuardados);

});

// Ejemplo de validación con Form Request
Route::post('/procesar-avanzado', function (\Illuminate\Http\Request $request) {
    
    // Validación más avanzada
    $validator = \Validator::make($request->all(), [
        'usuario' => 'required|alpha_dash|min:3|max:30|unique:users,username',
        'password' => 'required|min:8|confirmed',
        'telefono' => 'nullable|regex:/^[0-9]{10}$/',
        'fecha_nacimiento' => 'required|date|before:-18 years',
        'archivo' => 'nullable|file|max:2048|mimes:jpg,png,pdf'
    ]);

    if ($validator->fails()) {
        return redirect('/formulario-validacion')
                ->withErrors($validator)
                ->withInput();
    }

    return redirect('/formulario-validacion')
           ->with('success', '✅ Validación avanzada exitosa!');

});