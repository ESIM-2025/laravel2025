@extends('layouts.app')

@section('title', 'Demo - Validación Laravel')

@section('content')
<div class="container mt-4">
    <h2>🧪 Formulario de Demostración - Validación</h2>
    <p class="lead">Prueba las reglas de validación en tiempo real</p>
    
    <!-- Mostrar Errores -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <h5>❌ Errores de Validación:</h5>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Mostrar Éxito -->
    @if (session('success'))
        <div class="alert alert-success">
            ✅ {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Formulario de Registro</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('validacion.procesar') }}">
                @csrf
                
                <div class="form-group">
                    <label for="nombre"><strong>Nombre Completo *</strong></label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                           id="nombre" name="nombre" value="{{ old('nombre') }}" 
                           placeholder="Ingresa tu nombre">
                    @error('nombre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Requerido, máximo 50 caracteres</small>
                </div>

                <div class="form-group">
                    <label for="email"><strong>Email *</strong></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" value="{{ old('email') }}" 
                           placeholder="ejemplo@correo.com">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Formato de email válido</small>
                </div>

                <div class="form-group">
                    <label for="edad"><strong>Edad *</strong></label>
                    <input type="number" class="form-control @error('edad') is-invalid @enderror" 
                           id="edad" name="edad" value="{{ old('edad') }}" 
                           placeholder="18" min="18" max="100">
                    @error('edad')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Entre 18 y 100 años</small>
                </div>

                <div class="form-group">
                    <label for="sitio_web"><strong>Sitio Web (Opcional)</strong></label>
                    <input type="url" class="form-control @error('sitio_web') is-invalid @enderror" 
                           id="sitio_web" name="sitio_web" value="{{ old('sitio_web') }}" 
                           placeholder="https://misitio.com">
                    @error('sitio_web')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror>
                    <small class="form-text text-muted">URL válida (opcional)</small>
                </div>

                <div class="form-group">
                    <label for="password"><strong>Contraseña *</strong></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                           id="password" name="password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Mínimo 6 caracteres</small>
                </div>

                <div class="form-group">
                    <label for="password_confirmation"><strong>Confirmar Contraseña *</strong></label>
                    <input type="password" class="form-control" 
                           id="password_confirmation" name="password_confirmation">
                    <small class="form-text text-muted">Debe coincidir con la contraseña</small>
                </div>

                <button type="submit" class="btn btn-success btn-lg">
                    ✅ Enviar Formulario
                </button>
                <a href="{{ route('validacion.tutorial') }}" class="btn btn-outline-secondary">
                    📚 Volver al Tutorial
                </a>
            </form>
        </div>
    </div>

    <!-- Explicación de Reglas -->
    <div class="card mt-4">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">🔍 Reglas Aplicadas en Este Formulario</h5>
        </div>
        <div class="card-body">
            <ul>
                <li><code>'nombre' => 'required|string|max:50'</code></li>
                <li><code>'email' => 'required|email'</code></li>
                <li><code>'edad' => 'required|integer|min:18|max:100'</code></li>
                <li><code>'sitio_web' => 'nullable|url'</code></li>
                <li><code>'password' => 'required|min:6|confirmed'</code></li>
            </ul>
        </div>
    </div>
</div>
@endsection