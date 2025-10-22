<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 1. CAMBIAMOS EL NOMBRE DE LA CLASE
class ModelosExplicacionController extends Controller
{
    public function index()
    {
        // 2. APUNTAMOS A LA NUEVA VISTA (que crearemos en el paso 2)
        return view('explicacion_modelos');
    }
}