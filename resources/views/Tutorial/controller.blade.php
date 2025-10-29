<!-- resources/views/tutorial-controller.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tutorial - Controllers en Laravel</title>
</head>
<body>
    <h1>Tutorial de Controllers en Laravel</h1>
    
    <h2>¿Qué es un Controller?</h2>
    <p>Un Controller maneja la lógica de la aplicación y conecta Models con Views.</p>
    
    <h2>Comandos Básicos:</h2>
    <pre>
// Crear controller básico
php artisan make:controller MiController

// Crear controller con CRUD completo
php artisan make:controller ProductController --resource

// Crear controller para API
php artisan make:controller UserController --api
    </pre>
</body>
</html>