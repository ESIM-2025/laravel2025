<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Components - Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Laravel Docs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#about" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="#examples" class="nav-link">Ejemplo</a></li>
                    <li class="nav-item"><a href="#advantages" class="nav-link">Ventajas</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container text-center mt-5">
        <h1 class="mb-4">Componentes Blade</h1>
        <p class="lead">Los componentes Blade son una poderosa herramienta de Laravel para reutilizar interfaces de usuario.</p>
        
        <img src="https://picsum.photos/600/300" class="img-fluid rounded shadow my-4" alt="Ejemplo de componente">

        <section id="about" class="my-5">
            <h2>¿Qué son los componentes Blade?</h2>
            <p>Son piezas reutilizables de HTML combinadas con la lógica de Laravel. Ayudan a mantener tu código más limpio y ordenado.</p>
        </section>

        <section id="examples" class="my-5">
            <h2>Ejemplo de uso</h2>
            <p>Un componente puede representar una tarjeta, botón, formulario, alerta o cualquier parte visual repetida en tu aplicación.</p>
        </section>

        <section id="advantages" class="my-5">
            <h2>Ventajas</h2>
            <ul class="list-group w-50 mx-auto text-start">
                <li class="list-group-item">Reutilización de código</li>
                <li class="list-group-item">Mantenimiento sencillo</li>
                <li class="list-group-item">Estructura más limpia y escalable</li>
            </ul>
        </section>
        <section id="visual-examples" class="my-5">
    <h2 class="mb-4">Ejemplos visuales de componentes</h2>
    <div class="row">
        <x-card-example 
            title="Componente de Tarjeta"
            description="Este componente muestra una tarjeta con imagen, texto y un botón, reutilizable en cualquier parte del proyecto."
            image="https://picsum.photos/id/1018/400/250"
        />
        <x-card-example 
            title="Componente Informativo"
            description="Podés usar componentes para representar bloques de contenido reutilizables, como avisos o secciones destacadas."
            image="https://picsum.photos/id/1015/400/250"
        />
        <x-card-example 
            title="Componente con Imagen"
            description="Este componente puede personalizarse fácilmente pasando distintos atributos desde la vista principal."
            image="https://picsum.photos/id/1020/400/250"
        />
    </div>
</section>

    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <small>© 2025 Laravel Docs - Blade Components</small>
    </footer>
</body>
</html>
