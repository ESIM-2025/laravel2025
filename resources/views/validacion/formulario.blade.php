<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Validación - ESIM 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }
        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        .success-alert {
            border-left: 4px solid #28a745;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="form-container">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="h2 text-primary">📝 Formulario de Validación</h1>
                <p class="text-muted">Practica con validaciones reales en Laravel</p>
            </div>

            <!-- Alertas -->
            @if(session('success'))
                <div class="alert alert-success success-alert d-flex align-items-center">
                    <span class="me-2">✅</span>
                    <div>{{ session('success') }}</div>
                </div>
            @endif

            @if(session('datos'))
                <div class="alert alert-info">
                    <h6 class="alert-heading">📊 Datos Procesados:</h6>
                    <pre class="mb-0"><code>{{ json_encode(session('datos'), JSON_PRETTY_PRINT) }}</code></pre>
                </div>
            @endif

            <!-- Formulario -->
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form method="POST" action="/procesar-formulario">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo *</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                   id="nombre" name="nombre" value="{{ old('nombre') }}" 
                                   placeholder="Ingresa tu nombre completo">
                            @error('nombre')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico *</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" 
                                   placeholder="ejemplo@esim.edu">
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Edad -->
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad *</label>
                            <input type="number" class="form-control @error('edad') is-invalid @enderror" 
                                   id="edad" name="edad" value="{{ old('edad') }}" 
                                   placeholder="18" min="17" max="60">
                            @error('edad')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Matrícula -->
                        <div class="mb-3">
                            <label for="matricula" class="form-label">Matrícula *</label>
                            <input type="text" class="form-control @error('matricula') is-invalid @enderror" 
                                   id="matricula" name="matricula" value="{{ old('matricula') }}" 
                                   placeholder="ESIM2025001" maxlength="10">
                            <div class="form-text">Formato: ESIM seguido de 6 números (Ej: ESIM2025001)</div>
                            @error('matricula')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Carrera -->
                        <div class="mb-3">
                            <label for="carrera" class="form-label">Carrera *</label>
                            <select class="form-select @error('carrera') is-invalid @enderror" 
                                    id="carrera" name="carrera">
                                <option value="">Selecciona una carrera</option>
                                <option value="ingenieria" {{ old('carrera') == 'ingenieria' ? 'selected' : '' }}>Ingeniería</option>
                                <option value="medicina" {{ old('carrera') == 'medicina' ? 'selected' : '' }}>Medicina</option>
                                <option value="administracion" {{ old('carrera') == 'administracion' ? 'selected' : '' }}>Administración</option>
                            </select>
                            @error('carrera')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mensaje -->
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje (opcional)</label>
                            <textarea class="form-control @error('mensaje') is-invalid @enderror" 
                                      id="mensaje" name="mensaje" rows="3" 
                                      placeholder="Escribe un mensaje adicional">{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Términos -->
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input @error('terminos') is-invalid @enderror" 
                                       type="checkbox" id="terminos" name="terminos" value="1" 
                                       {{ old('terminos') ? 'checked' : '' }}>
                                <label class="form-check-label" for="terminos">
                                    Acepto los términos y condiciones *
                                </label>
                                @error('terminos')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Botones -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                📨 Enviar Formulario
                            </button>
                            <a href="/tutorial-validacion" class="btn btn-outline-secondary">
                                📚 Volver al Tutorial
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Información de Validación -->
            <div class="card mt-4">
                <div class="card-header bg-light">
                    <h6 class="mb-0">🔍 Reglas de Validación Aplicadas</h6>
                </div>
                <div class="card-body">
                    <pre class="mb-0"><code>
$request->validate([
    'nombre' => 'required|string|max:255|min:3',
    'email' => 'required|email|max:255',
    'edad' => 'required|integer|min:17|max:60',
    'matricula' => 'required|string|size:10|regex:/^ESIM\d+$/',
    'carrera' => 'required|in:ingenieria,medicina,administracion',
    'mensaje' => 'nullable|string|max:1000',
    'terminos' => 'accepted'
]);
                    </code></pre>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>