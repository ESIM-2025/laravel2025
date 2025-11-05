@extends('layouts.app')

@section('title', 'Tutorial: Vistas Blade y Partials')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Vistas Blade y Partials en Laravel</h1>

    <p class="lead">
        Blade es el motor de plantillas simple pero potente incluido con Laravel.
        A diferencia de otros motores, Blade no restringe el uso de PHP puro en las vistas.
        Además, permite dividir el código en componentes reutilizables llamados <strong>partials</strong>.
    </p>

    <hr>

    <h2>1. ¿Qué es una vista Blade?</h2>
    <p>
        Las vistas en Laravel se almacenan en <code>resources/views</code>.  
        Los archivos usan la extensión <code>.blade.php</code>.
    </p>
    <p><strong>Ejemplo:</strong> <code>resources/views/welcome.blade.php</code></p>

    <h2>2. Sintaxis básica de Blade</h2>
    <ul>
        <li><code>{{ $variable }}</code> → Muestra el valor escapado (seguro contra XSS).</li>
        <li><code>{!! $html !!}</code> → Muestra HTML sin escapar.</li>
        <li><code>@if, @foreach, @include, @extends</code> → Directivas de control.</li>
    </ul>

    <h2>3. ¿Qué es un Partial?</h2>
    <p>
        pueden referirse a varias ideas, principalmente clases parciales, que dividen la definición de una clase en múltiples archivos para facilitar el trabajo en equipo y la organización. También pueden ser vistas parciales, que son fragmentos de HTML que se renderizan dentro de otras vistas en aplicaciones web
        En VS Code, se almacena comúnmente en <code>resources/views/partials/</code>.
    </p>

    <h3>Ejemplo de partial: <code>resources/views/partials/footer.blade.php</code></h3>
    <pre><code><footer class="bg-dark text-white text-center p-3">
    <p>&copy; {{ date('Y') }} - Mi Aplicación Laravel</p>
</footer></code></pre>

    <h3>Incluir el partial en una vista:</h3>
    <pre><code>@include('partials.footer')</code></pre>

    <h2>4. Beneficios de usar Partials</h2>
    <ul>
        <li>Evitan la repetición de código (DRY).</li>
        <li>Facilitan el mantenimiento.</li>
        <li>Mejoran la organización del proyecto.</li>
    </ul>

    <h2>5. Ejemplo práctico en este proyecto</h2>
    <p>
        En este repositorio, cada estudiante creó su propio partial en:
        <code>resources/views/partials/[nombre].blade.php</code>
        y lo puede incluir con:
        <code>@include('partials.nombre')</code>
    </p>

    <div class="alert alert-info mt-4">
        💡 <strong>Consejo:</strong> Usa partials para menús, headers, footers, cards de perfil, etc.
    </div>

    <hr>

    <h2>6. Recursos adicionales</h2>
    <ul>
        <li>
            Video recomendado: 
            <a href="https://youtu.be/JxNLetB2_eA?si=PflcxqlPwlf6DRCh" target="_blank">Vistas y el motor de plantillas Blade</a>
        </li>
    </ul>

    <div class="text-center mt-5">
        <a href="{{ url('/') }}" class="btn btn-secondary">← Volver al inicio</a>
    </div>
</div>
@endsection