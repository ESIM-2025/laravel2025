<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Muestra la página de inicio (welcome.blade.php).
     */
    public function index()
    {
        // Puedes pasar datos a la vista si los necesitas.
        // Por ahora, solo queremos mostrar la vista.
        return view('welcome');
    }

    /**
     * Muestra una presentación de estudiante específica.
     * El parámetro $nombreBlade coincidirá con el nombre del archivo blade.
     */
    public function mostrarPresentacion($nombreBlade)
    {
        // Verifica si la vista existe antes de intentar cargarla
        if (view()->exists('partials.' . $nombreBlade)) {
            return view('partials.' . $nombreBlade);
        }

        // Si la vista no existe, puedes redirigir o mostrar un error 404
        abort(404, 'Presentación no encontrada.');
    }

    /**
     * Muestra una explicación de tema específica.
     * Por ahora, solo vamos a enlazar a la de modelos.
     */
    public function mostrarExplicacion($nombreBlade)
    {
         if (view()->exists('partials.' . $nombreBlade)) {
            return view('partials.' . $nombreBlade);
        }
        abort(404, 'Explicación no encontrada.');
    }
}