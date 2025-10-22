<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos de Validación - ESIM 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="h2 text-primary">📚 Ejemplos de Código - Validación</h1>
            <p class="text-muted">Diferentes escenarios y soluciones de validación</p>
        </div>

        <div class="row g-4">
            <!-- Ejemplo 1 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">🎓 Validación de Estudiante</h5>
                    </div>
                    <div class="card-body">
                        <pre><code class="language-php">
$request->validate([
    'matricula' => 'required|unique:estudiantes|size:10|regex:/^ESIM\d+$/',
    'nombre' => 'required|string|max:255|min:3',
    'email' => 'required|email|unique:estudiantes',
    'edad' => 'required|integer|min:17|max:60',
    'carrera' => 'required|in:ingenieria,medicina,administracion',
    'promedio' => 'required|numeric|between:0,10',
    'fecha_ingreso' => 'required|date|after:2020-01-01'
], [
    'matricula.regex' => 'La matrícula debe empezar con ESIM seguido de números.',
    'edad.min' => 'El estudiante debe tener al menos 17 años.',
    'promedio.between' => 'El promedio debe estar entre 0 y 10.'
]);
                        </code></pre>
                    </div>
                </div>
            </div>

            <!-- Ejemplo 2 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">📧 Validación de Formulario de Contacto</h5>
                    </div>
                    <div class="card-body">
                        <pre><code class="language-php">
$validator = Validator::make($request->all(), [
    'nombre' => 'required|string|max:100',
    'email' => 'required|email',
    'telefono' => 'nullable|regex:/^[0-9]{10}$/',
    'asunto' => 'required|string|max:200',
    'mensaje' => 'required|string|min:10|max:1000',
    'prioridad' => 'required|in:baja,media,alta',
    'adjunto' => 'nullable|file|max:5120|mimes:pdf,doc,docx'
], [
    'telefono.regex' => 'El teléfono debe tener 10 dígitos.',
    'adjunto.max' => 'El archivo no debe pesar más de 5MB.'
]);

if ($validator->fails()) {
    return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
}
                        </code></pre>
                    </div>
                </div>
            </div>

            <!-- Ejemplo 3 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">🛒 Validación de Producto</h5>
                    </div>
                    <div class="card-body">
                        <pre><code class="language-php">
class ProductoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255|unique:productos',
            'descripcion' => 'required|string|min:10|max:1000',
            'precio' => 'required|numeric|min:0|max:999999.99',
            'stock' => 'required|integer|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha_vencimiento' => 'nullable|date|after:today',
            'codigo_barras' => 'required|string|size:13'
        ];
    }

    public function messages()
    {
        return [
            'precio.min' => 'El precio no puede ser negativo.',
            'categoria_id.exists' => 'La categoría seleccionada no existe.',
            'fecha_vencimiento.after' => 'La fecha de vencimiento debe ser futura.'
        ];
    }
}
                        </code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="/tutorial-validacion" class="btn btn-primary me-2">📖 Volver al Tutorial</a>
            <a href="/formulario-validacion" class="btn btn-outline-primary">📝 Probar Formulario</a>
        </div>
    </div>
</body>
</html>