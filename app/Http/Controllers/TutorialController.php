<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        return view('tutorial-controller');
    }
    
    public function ejemplo()
    {
        $mensaje = "¡Hola desde el Controller!";
        return view('tutorial-controller', compact('mensaje'));
    }
}