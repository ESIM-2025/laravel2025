@extends('layouts.app') {{-- Si usás un layout principal, sino podés quitar esta línea --}}

@section('content')
<div class="container">
    <h1>Archivos de configuración y .env</h1>

    <p>En Laravel, los archivos de configuración permiten definir cómo funciona la aplicación en distintos entornos (local, producción, testing, etc.).</p>

    <h2>📁 Archivos de configuración</h2>
    <p>Se encuentran en la carpeta <code>/config</code> del proyecto y contienen información general como el nombre de la aplicación, zona horaria, base de datos y otros ajustes.</p>

    <pre>
config/app.php
config/database.php
config/mail.php
    </pre>

    <h2>🔐 Archivo .env</h2>
    <p>El archivo <code>.env</code> almacena variables privadas del entorno, como contraseñas, claves secretas y configuraciones específicas de cada equipo.</p>

    <pre>
APP_NAME="Laravel2025"
APP_ENV=local
APP_KEY=base64:...
DB_CONNECTION=mysql
DB_DATABASE=laravel2025
DB_USERNAME=root
DB_PASSWORD=
    </pre>

    <h3>💡 Diferencias:</h3>
    <ul>
        <li><strong>.env</strong>: contiene datos sensibles, no se sube a GitHub.</li>
        <li><strong>/config</strong>: contiene configuración general, sí se sube.</li>
    </ul>

    <p>Esta vista fue creada por <strong>Iara Nicol Pereyra</strong> como parte del trabajo de la rama <code>iara</code>.</p>
</div>
@endsection
