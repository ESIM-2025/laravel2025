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
        <h3>Como ya habiamos clonado todo, lo unico q nos queda por hacer es esto: git checkout -b feature-controller
        eso va en la terminal, despues  vamos a crear el controlador. 
php artisan make:controller MiController

        Una ves queya creamos vamos a resources/views/tutorial-controller.blade.php
        Ahí primero creamos en viws una carpeta llamda tutorial, despues dentro de tutorial hacemos un blade : controller.blade.php
        Una ves que ya tenemos eso creado, dentro del blade vamos a poner lo siguiente (como base)<h3>
            
        (<!DOCTYPE html>
<html>
<head>
    <title>Tutorial - Controllers</title>
</head>
<body>
    <h1>🚀 Tutorial de Controllers</h1>
    <p>Controlador creado exitosamente</p>
</body>
</html>)
        ()<-- los parentesis son para marcar lo q tenemos q poner nomas.
        Despues de que se creo nuestro tutorialcontroller, vamos a agregarle el siguiente codigo
(<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        return view('tutorial-controller');
    }
})

Una ves que ya tenemos eso vamosa  routes/web.php y al codigo que ya tenemos ahí vamos agregar al final sin modificar nada el siguiente codigo
    (use App\Http\Controllers\TutorialController;
Route::get('/tutorial-controller', [TutorialController::class, 'index']);)

Y por ultimo tenemos q subir todo al github, 
    (git add .
git commit -m "feat: add tutorial básico sobre controllers"
git push origin feature-controller)
