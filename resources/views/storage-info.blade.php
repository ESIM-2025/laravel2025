<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Storage en Laravel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    font-family: 'Nunito', sans-serif;
    background-color: #ffffff;
    color: #1a202c;
}
h1, h2 {
    color: #0d6efd;
    font-weight: 700;
}
.container {
    max-width: 1000px;
    margin: 50px auto;
    padding: 20px;
}
.card {
    background: #f0f8ff;
    border-radius: 12px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    padding: 25px;
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
code {
    background: #e0f2ff;
    color: #0d3c91;
    padding: 3px 6px;
    border-radius: 6px;
    font-family: monospace;
}
ul li {
    margin-bottom: 8px;
}
.table thead {
    background-color: #cfe2ff;
}
.icon {
    font-size: 1.5rem;
    color: #0d6efd;
    margin-right: 8px;
}
footer {
    text-align: center;
    color: #6c757d;
    margin-top: 50px;
}
a.btn {
    display: inline-block;
    margin-top: 15px;
    background: #0d6efd;
    color: white;
    border-radius: 8px;
    padding: 10px 25px;
    text-decoration: none;
    transition: 0.2s;
}
a.btn:hover { background: #0b5ed7; }
.highlight {
    background: #e6f0ff;
    border-left: 5px solid #0d6efd;
    padding: 10px 15px;
    margin: 15px 0;
}
</style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4"><i class="bi bi-box-seam icon"></i>¿Qué es el Storage en Laravel?</h1>

    <div class="card">
        <p>El <strong>Storage</strong> en Laravel permite guardar, leer, mover y eliminar archivos fácilmente. 
        Puede almacenar datos localmente o en la nube (Amazon S3, Google Drive, Dropbox). Usa internamente <strong>Flysystem</strong> para interactuar con distintos sistemas de archivos.</p>
    </div>

    <div class="card">
        <h2><i class="bi bi-tools icon"></i>¿Para qué sirve?</h2>
        <ul>
            <li>Guardar archivos subidos por usuarios (fotos, PDFs, videos).</li>
            <li>Leer o mostrar archivos fácilmente.</li>
            <li>Eliminar archivos cuando ya no se usan.</li>
            <li>Organizarlos por carpetas (imagenes/, documentos/, etc.).</li>
            <li>Controlar acceso (público o privado).</li>
            <li>Guardar en local o en la nube.</li>
        </ul>
    </div>

    <div class="card">
        <h2><i class="bi bi-folder2-open icon"></i>Estructura de carpetas</h2>
        <pre>
/storage
  /app
    /public
  /framework
  /logs
        </pre>
        <p>Los archivos públicos van en <code>/storage/app/public</code> y se hacen visibles con <code>php artisan storage:link</code>.</p>
    </div>

    <div class="card">
        <h2><i class="bi bi-code icon"></i>Funciones comunes</h2>
        <ul>
            <li>Guardar: <code>Storage::put('archivos/ejemplo.txt', 'Contenido')</code></li>
            <li>Leer: <code>Storage::get('archivos/ejemplo.txt')</code></li>
            <li>Borrar: <code>Storage::delete('archivos/ejemplo.txt')</code></li>
            <li>Listar: <code>Storage::files('archivos')</code></li>
            <li>Crear carpeta: <code>Storage::makeDirectory('nueva')</code></li>
        </ul>
    </div>

    <div class="card">
        <h2><i class="bi bi-lock icon"></i>Archivos públicos y privados</h2>
        <table class="table">
            <thead>
                <tr><th>Tipo</th><th>Carpeta</th><th>Acceso</th><th>Ejemplo</th></tr>
            </thead>
            <tbody>
                <tr><td>Privado</td><td>storage/app</td><td>Solo Laravel</td><td>Reportes internos</td></tr>
                <tr><td>Público</td><td>storage/app/public</td><td>Navegador</td><td>Fotos de perfil</td></tr>
            </tbody>
        </table>
    </div>

    <div class="card">
        <h2><i class="bi bi-cloud icon"></i>Nube vs phpMyAdmin</h2>
        <table class="table">
            <thead>
                <tr><th>Concepto</th><th>Storage</th><th>phpMyAdmin</th></tr>
            </thead>
            <tbody>
                <tr><td>Tipo de datos</td><td>Archivos (PDF, imágenes)</td><td>Datos estructurados</td></tr>
                <tr><td>Ubicación</td><td>Carpetas o nube</td><td>Tablas MySQL</td></tr>
                <tr><td>Manejo</td><td>Storage::</td><td>DB:: o Eloquent</td></tr>
                <tr><td>Ejemplo</td><td>Subir imagen</td><td>Guardar nombre y URL</td></tr>
            </tbody>
        </table>
    </div>

    <footer>
        <p>Proyecto informativo — Storage en Laravel</p>
        <a href="{{ url('/') }}" class="btn"><i class="bi bi-arrow-left-circle"></i> Volver al inicio</a>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
