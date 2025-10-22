<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Components - Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-950 text-white font-sans">

    {{-- NAVBAR --}}
    <nav class="flex justify-between items-center px-8 py-4 bg-gray-900/80 backdrop-blur-md fixed w-full z-50">
        <h1 class="text-xl font-bold tracking-wide">Laravel Docs</h1>
        <div class="space-x-6 text-sm uppercase">
            <a href="#about" class="hover:text-red-400 transition">Sobre</a>
            <a href="#examples" class="hover:text-red-400 transition">Ejemplo</a>
            <a href="#advantages" class="hover:text-red-400 transition">Ventajas</a>
        </div>
    </nav>

    {{-- HERO --}}
    <section class="relative flex flex-col justify-center items-center text-center h-screen px-4">
        <img src="{{ asset('images/mountains.jpg') }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-40" alt="">
        <div class="relative z-10 max-w-2xl">
            <h2 class="text-5xl md:text-6xl font-bold mb-4 tracking-tight">
                Blade Components en Laravel
            </h2>
            <p class="text-gray-300 text-lg md:text-xl mb-8">
                Reutilizá tus vistas, mantené tu código limpio y construí interfaces elegantes fácilmente con Blade.
            </p>
            <a href="#about" class="px-6 py-3 bg-red-500 hover:bg-red-600 rounded-full text-white font-semibold transition">
                Comenzar
            </a>
        </div>
    </section>

    {{-- SECCIÓN 1: ¿Qué son? --}}
    <section id="about" class="py-20 bg-gray-900 text-gray-200">
        <div class="max-w-5xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-6 text-center">¿Qué son los Blade Components?</h3>
            <p class="text-lg leading-relaxed text-center max-w-3xl mx-auto">
                Los <span class="text-red-400 font-semibold">Blade Components</span> son una característica de Laravel 
                que te permite crear piezas reutilizables de interfaz. Separan la lógica del diseño, 
                haciendo que tus vistas sean más ordenadas y fáciles de mantener.
            </p>
            <div class="mt-10 flex justify-center">
                <img src="{{ asset('images/blade-component-diagram.png') }}" alt="Blade Components" 
                     class="rounded-xl shadow-xl w-full max-w-lg">
            </div>
        </div>
    </section>

    {{-- SECCIÓN 2: Ejemplo --}}
    <section id="examples" class="py-20 bg-gray-950 text-gray-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-6">Ejemplo básico</h3>
            <p class="mb-6 text-gray-400">
                A continuación se muestra cómo crear y usar un componente simple de tarjeta:
            </p>

            <div class="bg-gray-900 rounded-xl text-left p-6 overflow-x-auto shadow-lg border border-gray-800">
<pre class="text-green-400 text-sm">
{{-- resources/views/components/card.blade.php --}}
&lt;div class="p-4 bg-white rounded-lg shadow text-gray-900"&gt;
    &lt;h5 class="font-bold"&gt;{{ $title }}&lt;/h5&gt;
    &lt;p&gt;{{ $slot }}&lt;/p&gt;
&lt;/div&gt;
</pre>
            </div>

            <p class="mt-6 mb-4 text-gray-400">Uso en una vista:</p>
            <div class="bg-gray-900 rounded-xl text-left p-6 overflow-x-auto shadow-lg border border-gray-800">
<pre class="text-green-400 text-sm">
&lt;x-card title="Ejemplo de componente"&gt;
    Este es el contenido del componente.
&lt;/x-card&gt;
</pre>
            </div>
        </div>
    </section>

    {{-- SECCIÓN 3: Ventajas --}}
    <section id="advantages" class="py-20 bg-gray-900 text-gray-200">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10">Ventajas de usar Blade Components</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition">
                    <h4 class="font-semibold text-red-400 mb-3">Reutilización</h4>
                    <p>Definí una vez tus componentes y usalos en todo el proyecto sin repetir código.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition">
                    <h4 class="font-semibold text-red-400 mb-3">Mantenimiento fácil</h4>
                    <p>Modificá el diseño desde un solo archivo y los cambios se aplican globalmente.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition">
                    <h4 class="font-semibold text-red-400 mb-3">Código más limpio</h4>
                    <p>Separá estructura, contenido y lógica para mantener tus vistas claras y ordenadas.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="py-8 bg-gray-950 border-t border-gray-800 text-center text-gray-500 text-sm">
        <p>© {{ date('Y') }} Laravel Blade Components — Hecho con ❤️ por Jeremías</p>
    </footer>

</body>
</html>
