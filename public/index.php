<?php

// Simulamos un entorno Laravel básico para el tutorial
require_once __DIR__.'/../vendor/autoload.php';

// Incluimos las rutas
$routes = include __DIR__.'/../routes/web.php';

// Simulamos el manejo de rutas básico
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Manejo básico de rutas para el tutorial
if ($requestUri === '/' || $requestUri === '/tutorial-validacion') {
    include __DIR__.'/../resources/views/validacion/tutorial.blade.php';
} elseif ($requestUri === '/formulario-validacion') {
    include __DIR__.'/../resources/views/validacion/formulario.blade.php';
} elseif ($requestUri === '/ejemplos-validacion') {
    include __DIR__.'/../resources/views/validacion/ejemplos.blade.php';
} else {
    http_response_code(404);
    echo "Página no encontrada - ESIM 2025 Tutorial de Validación";
} 
