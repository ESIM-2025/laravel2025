<?php
// server.php - Servidor para Tutorial de Validación ESIM 2025
session_start();

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Función para redireccionar
function redirect($url, $with = []) {
    if (!empty($with['success'])) {
        $_SESSION['success'] = $with['success'];
    }
    if (!empty($with['datos'])) {
        $_SESSION['datos'] = $with['datos'];
    }
    if (!empty($with['errors'])) {
        $_SESSION['errors'] = $with['errors'];
    }
    header("Location: $url");
    exit;
}

// Manejar rutas
switch ($request) {
    case '/':
    case '/tutorial-validacion':
        if (file_exists('resources/views/validacion/tutorial.blade.php')) {
            include 'resources/views/validacion/tutorial.blade.php';
        } else {
            echo "<h1>📖 Tutorial de Validación</h1><p>Vista no encontrada</p>";
        }
        break;
        
    case '/formulario-validacion':
        // Pasar variables a la vista
        $success = $_SESSION['success'] ?? null;
        $datos = $_SESSION['datos'] ?? null;
        $errors = $_SESSION['errors'] ?? [];
        
        // Limpiar sesión después de usar
        unset($_SESSION['success']);
        unset($_SESSION['datos']);
        unset($_SESSION['errors']);
        
        if (file_exists('resources/views/validacion/formulario.blade.php')) {
            include 'resources/views/validacion/formulario.blade.php';
        } else {
            echo "<h1>📝 Formulario</h1><p>Vista no encontrada</p>";
        }
        break;
        
    case '/ejemplos-validacion':
        if (file_exists('resources/views/validacion/ejemplos.blade.php')) {
            include 'resources/views/validacion/ejemplos.blade.php';
        } else {
            echo "<h1>📚 Ejemplos</h1><p>Vista no encontrada</p>";
        }
        break;
        
    case '/procesar-formulario':
        if ($method === 'POST') {
            // VALIDACIÓN SIMULADA
            $errors = [];
            $data = $_POST;
            
            // Validar nombre
            if (empty(trim($data['nombre'] ?? ''))) {
                $errors['nombre'] = 'El nombre es obligatorio.';
            } elseif (strlen(trim($data['nombre'])) < 3) {
                $errors['nombre'] = 'El nombre debe tener al menos 3 caracteres.';
            }
            
            // Validar email
            if (empty($data['email'] ?? '')) {
                $errors['email'] = 'El correo electrónico es obligatorio.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Debe ser un correo electrónico válido.';
            }
            
            // Validar edad
            if (empty($data['edad'] ?? '')) {
                $errors['edad'] = 'La edad es obligatoria.';
            } elseif ($data['edad'] < 17 || $data['edad'] > 60) {
                $errors['edad'] = 'La edad debe estar entre 17 y 60 años.';
            }
            
            // Validar matrícula
            if (empty($data['matricula'] ?? '')) {
                $errors['matricula'] = 'La matrícula es obligatoria.';
            } elseif (!preg_match('/^ESIM\d{6}$/', $data['matricula'])) {
                $errors['matricula'] = 'La matrícula debe tener formato ESIM2025001.';
            }
            
            // Validar carrera
            if (empty($data['carrera'] ?? '')) {
                $errors['carrera'] = 'Debes seleccionar una carrera.';
            } elseif (!in_array($data['carrera'], ['ingenieria', 'medicina', 'administracion'])) {
                $errors['carrera'] = 'Carrera no válida.';
            }
            
            // Validar términos
            if (empty($data['terminos'] ?? '')) {
                $errors['terminos'] = 'Debes aceptar los términos y condiciones.';
            }
            
            if (empty($errors)) {
                // Simular guardado exitoso
                $datosGuardados = [
                    'nombre' => $data['nombre'],
                    'email' => $data['email'],
                    'edad' => $data['edad'],
                    'matricula' => $data['matricula'],
                    'carrera' => $data['carrera'],
                    'mensaje' => $data['mensaje'] ?? 'Sin mensaje',
                    'fecha_registro' => date('Y-m-d H:i:s')
                ];
                
                redirect('/formulario-validacion', [
                    'success' => '✅ Formulario validado y procesado correctamente!',
                    'datos' => $datosGuardados
                ]);
            } else {
                redirect('/formulario-validacion', ['errors' => $errors]);
            }
        }
        break;
        
    default:
        http_response_code(404);
        echo "<h1>404 - Página no encontrada</h1>";
        echo "<p>Visita <a href='/tutorial-validacion'>el tutorial</a></p>";
        break;
}
?>
