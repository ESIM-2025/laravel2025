<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Validación Laravel - ESIM 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .code-block {
            background: #2d3748;
            color: #81e6d9;
            padding: 1rem;
            border-radius: 0.5rem;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            overflow-x: auto;
        }
        .nav-tutorial {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .example-card {
            border-left: 4px solid #4299e1;
            transition: all 0.3s ease;
        }
        .example-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-tutorial">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                🛡️ ESIM 2025 - Validación Laravel
            </a>
        </div>
    </nav>

    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary">Tutorial de Validación en Laravel</h1>
            <p class="lead text-muted">Aprende a validar datos de forma segura y profesional</p>
        </div>

        <!-- Introducción -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title h4 text-primary">📖 ¿Qué es la Validación?</h2>
                        <p class="card-text">
                            La validación en Laravel es el proceso de verificar que los datos ingresados por los usuarios 
                            cumplan con reglas específicas antes de ser procesados. Es esencial para la seguridad y integridad de los datos.
                        </p>
                        <div class="code-block">
// Ejemplo básico de validación<br>
$validated = $request->validate([<br>
&nbsp;&nbsp;&nbsp;&nbsp;'email' => 'required|email|unique:users',<br>
&nbsp;&nbsp;&nbsp;&nbsp;'password' => 'required|min:8|confirmed'<br>
]);
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Métodos de Validación -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="h3 text-primary mb-4">🎯 Métodos de Validación</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 example-card">
                            <div class="card-body">
                                <h5 class="card-title text-success">1. Validación Básica</h5>
                                <p class="card-text">Usando <code>$request->validate()</code></p>
                                <div class="code-block">
$request->validate([<br>
&nbsp;&nbsp;'nombre' => 'required|string|max:255',<br>
&nbsp;&nbsp;'email' => 'required|email'<br>
]);
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 example-card">
                            <div class="card-body">
                                <h5 class="card-title text-warning">2. Form Request</h5>
                                <p class="card-text">Clases dedicadas para validación compleja</p>
                                <div class="code-block">
// php artisan make:request UserRequest<br>
class UserRequest extends FormRequest<br>
{<br>
&nbsp;&nbsp;public function rules()<br>
&nbsp;&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;return [<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'name' => 'required'<br>
&nbsp;&nbsp;&nbsp;&nbsp;];<br>
&nbsp;&nbsp;}<br>
}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reglas Comunes -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="h3 text-primary mb-4">📋 Reglas de Validación Comunes</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Regla</th>
                                <th>Descripción</th>
                                <th>Ejemplo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>required</code></td>
                                <td>Campo obligatorio</td>
                                <td><code>'name' => 'required'</code></td>
                            </tr>
                            <tr>
                                <td><code>email</code></td>
                                <td>Formato de email válido</td>
                                <td><code>'email' => 'email'</code></td>
                            </tr>
                            <tr>
                                <td><code>unique:table</code></td>
                                <td>Valor único en la tabla</td>
                                <td><code>'email' => 'unique:users'</code></td>
                            </tr>
                            <tr>
                                <td><code>min:value</code></td>
                                <td>Valor mínimo</td>
                                <td><code>'age' => 'min:18'</code></td>
                            </tr>
                            <tr>
                                <td><code>max:value</code></td>
                                <td>Valor máximo</td>
                                <td><code>'name' => 'max:255'</code></td>
                            </tr>
                            <tr>
                                <td><code>confirmed</code></td>
                                <td>Confirmación de campo</td>
                                <td><code>'password' => 'confirmed'</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Ejemplos Prácticos -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="h3 text-primary mb-4">💡 Ejemplos Prácticos para ESIM 2025</h2>
                
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card example-card">
                            <div class="card-body">
                                <h5 class="card-title">🎓 Registro de Estudiante</h5>
                                <div class="code-block">
$request->validate([<br>
&nbsp;&nbsp;'matricula' => 'required|unique:estudiantes|size:10',<br>
&nbsp;&nbsp;'nombre' => 'required|string|max:255',<br>
&nbsp;&nbsp;'email' => 'required|email|unique:estudiantes',<br>
&nbsp;&nbsp;'edad' => 'required|integer|min:17|max:60',<br>
&nbsp;&nbsp;'carrera' => 'required|in:ingenieria,medicina,administracion'<br>
]);
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card example-card">
                            <div class="card-body">
                                <h5 class="card-title">📝 Formulario de Contacto</h5>
                                <div class="code-block">
$request->validate([<br>
&nbsp;&nbsp;'nombre' => 'required|string|max:100',<br>
&nbsp;&nbsp;'email' => 'required|email',<br>
&nbsp;&nbsp;'asunto' => 'required|string|max:200',<br>
&nbsp;&nbsp;'mensaje' => 'required|string|min:10|max:1000',<br>
&nbsp;&nbsp;'terminos' => 'accepted'<br>
]);
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="h4 text-primary mb-3">¿Listo para practicar?</h3>
                    <p class="text-muted mb-4">Prueba nuestro formulario interactivo con validación en tiempo real</p>
                    <a href="/formulario-validacion" class="btn btn-primary btn-lg me-3">
                        📝 Probar Formulario
                    </a>
                    <a href="/ejemplos-validacion" class="btn btn-outline-primary btn-lg">
                        📚 Ver Más Ejemplos
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">ESIM 2025 - Tutorial de Validación en Laravel</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>