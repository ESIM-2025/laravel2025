<?php
// Simular funciones de Laravel
$errors = $errors ?? [];
$success = $success ?? null;
$datos = $datos ?? null;

// Función helper para old()
function old($field, $default = '') {
    return $_POST[$field] ?? $default;
}

// Función helper para verificar errores
function hasError($field) {
    global $errors;
    return isset($errors[$field]);
}

// Función helper para get error message
function getError($field) {
    global $errors;
    return $errors[$field] ?? '';
}
?>
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
            <?php if ($success): ?>
                <div class="alert alert-success success-alert d-flex align-items-center">
                    <span class="me-2">✅</span>
                    <div><?php echo $success; ?></div>
                </div>
            <?php endif; ?>

            <?php if ($datos): ?>
                <div class="alert alert-info">
                    <h6 class="alert-heading">📊 Datos Procesados:</h6>
                    <pre class="mb-0"><code><?php echo json_encode($datos, JSON_PRETTY_PRINT); ?></code></pre>
                </div>
            <?php endif; ?>

            <!-- Mostrar errores generales -->
            <?php if (!empty($errors) && is_array($errors)): ?>
                <div class="alert alert-danger">
                    <strong>❌ Errores de validación:</strong>
                    <ul class="mb-0 mt-2">
                        <?php foreach($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Formulario -->
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <form method="POST" action="/procesar-formulario">

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre completo *</label>
                            <input type="text" class="form-control <?php echo hasError('nombre') ? 'is-invalid' : ''; ?>" 
                                   id="nombre" name="nombre" value="<?php echo htmlspecialchars(old('nombre')); ?>" 
                                   placeholder="Ingresa tu nombre completo">
                            <?php if (hasError('nombre')): ?>
                                <div class="error-message"><?php echo getError('nombre'); ?></div>
                            <?php endif; ?>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico *</label>
                            <input type="email" class="form-control <?php echo hasError('email') ? 'is-invalid' : ''; ?>" 
                                   id="email" name="email" value="<?php echo htmlspecialchars(old('email')); ?>" 
                                   placeholder="ejemplo@esim.edu">
                            <?php if (hasError('email')): ?>
                                <div class="error-message"><?php echo getError('email'); ?></div>
                            <?php endif; ?>
                        </div>

                        <!-- Edad -->
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad *</label>
                            <input type="number" class="form-control <?php echo hasError('edad') ? 'is-invalid' : ''; ?>" 
                                   id="edad" name="edad" value="<?php echo htmlspecialchars(old('edad')); ?>" 
                                   placeholder="18" min="17" max="60">
                            <?php if (hasError('edad')): ?>
                                <div class="error-message"><?php echo getError('edad'); ?></div>
                            <?php endif; ?>
                        </div>

                        <!-- Matrícula -->
                        <div class="mb-3">
                            <label for="matricula" class="form-label">Matrícula *</label>
                            <input type="text" class="form-control <?php echo hasError('matricula') ? 'is-invalid' : ''; ?>" 
                                   id="matricula" name="matricula" value="<?php echo htmlspecialchars(old('matricula')); ?>" 
                                   placeholder="ESIM2025001" maxlength="10">
                            <div class="form-text">Formato: ESIM seguido de 6 números (Ej: ESIM2025001)</div>
                            <?php if (hasError('matricula')): ?>
                                <div class="error-message"><?php echo getError('matricula'); ?></div>
                            <?php endif; ?>
                        </div>

                        <!-- Carrera -->
                        <div class="mb-3">
                            <label for="carrera" class="form-label">Carrera *</label>
                            <select class="form-select <?php echo hasError('carrera') ? 'is-invalid' : ''; ?>" 
                                    id="carrera" name="carrera">
                                <option value="">Selecciona una carrera</option>
                                <option value="ingenieria" <?php echo old('carrera') == 'ingenieria' ? 'selected' : ''; ?>>Ingeniería</option>
                                <option value="medicina" <?php echo old('carrera') == 'medicina' ? 'selected' : ''; ?>>Medicina</option>
                                <option value="administracion" <?php echo old('carrera') == 'administracion' ? 'selected' : ''; ?>>Administración</option>
                            </select>
                            <?php if (hasError('carrera')): ?>
                                <div class="error-message"><?php echo getError('carrera'); ?></div>
                            <?php endif; ?>
                        </div>

                        <!-- Mensaje -->
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje (opcional)</label>
                            <textarea class="form-control <?php echo hasError('mensaje') ? 'is-invalid' : ''; ?>" 
                                      id="mensaje" name="mensaje" rows="3" 
                                      placeholder="Escribe un mensaje adicional"><?php echo htmlspecialchars(old('mensaje')); ?></textarea>
                            <?php if (hasError('mensaje')): ?>
                                <div class="error-message"><?php echo getError('mensaje'); ?></div>
                            <?php endif; ?>
                        </div>

                        <!-- Términos -->
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input <?php echo hasError('terminos') ? 'is-invalid' : ''; ?>" 
                                       type="checkbox" id="terminos" name="terminos" value="1" 
                                       <?php echo old('terminos') ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="terminos">
                                    Acepto los términos y condiciones *
                                </label>
                                <?php if (hasError('terminos')): ?>
                                    <div class="error-message"><?php echo getError('terminos'); ?></div>
                                <?php endif; ?>
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