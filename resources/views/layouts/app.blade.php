<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Laravel Storage - Demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style> body{background:#f7fafc} .hero{background:linear-gradient(90deg,#5561ff,#8b5cf6);color:#fff;padding:2rem}</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ route('storage.index') }}">Laravel Storage</a>
    <div><a class="btn btn-sm btn-primary" href="{{ route('storage.create') }}">Subir archivo</a></div>
  </div>
</nav>

<header class="hero">
  <div class="container">
    <h1 class="h3">Sistema Storage en Laravel</h1>
    <p class="mb-0">Guardar, leer, mover y eliminar archivos localmente o en la nube.</p>
  </div>
</header>

<main class="container my-5">
  @if(session('status')) <div class="alert alert-success">{{ session('status') }}</div> @endif
  @if($errors->any()) <div class="alert alert-danger">{{ $errors->first() }}</div> @endif
  @yield('content')
</main>

<footer class="text-center text-muted py-3">Demo Storage • Laravel</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
