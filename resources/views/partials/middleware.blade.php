
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Middleware en Laravel - Torgen 🌧️</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animaciones y efectos mágicos */
        .fade-in { animation: fadeIn 1.2s ease forwards; opacity: 0; }
        @keyframes fadeIn { to { opacity: 1; } }


        .glow {
            text-shadow: 0 0 8px rgba(160, 120, 255, 0.7),
                         0 0 20px rgba(180, 140, 255, 0.6);
        }


        .card-hover:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 10px 30px rgba(140, 90, 255, 0.25);
            transition: all 0.4s ease;
        }


        .stars {
            background: radial-gradient(circle at 20% 30%, rgba(255,255,255,0.15) 0%, transparent 70%),
                        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 80%),
                        linear-gradient(to bottom, #1e003b, #0f0020);
            background-size: cover;
        }


        code {
            font-family: "JetBrains Mono", monospace;
        }
    </style>
</head>
<body class="stars font-sans text-gray-200 min-h-screen flex flex-col">


    <!-- Banner o carátula -->
    <header class="relative w-full h-64 overflow-hidden shadow-lg">
        <img src="{{ asset('images/MIDDLEWARE.png') }}"
            alt="Portada del tutorial Middleware"
            class="w-full h-full object-cover brightness-75">
        <h1 class="absolute inset-0 flex items-center justify-center text-4xl font-extrabold text-white drop-shadow-lg glow">
           
        </h1>
    </header>


    <!-- Encabezado de navegación -->
    <nav class="bg-gradient-to-r from-indigo-800 to-violet-900 shadow-lg sticky top-0 z-50 backdrop-blur-sm bg-opacity-90">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <h2 class="text-2xl font-bold text-violet-300 glow">🌧️ ECO 6 + ECO 7, Innovación. Tutorial de Middleware en Laravel 🌌</h2>
            <p class="font-medium text-indigo-200 glow">Por Torgen 🌧️</p>
        </div>
    </nav>


    <!-- Contenido principal -->
    <main class="container mx-auto px-6 py-12 flex-1 space-y-10">


        <!-- Definición -->
        <section class="bg-gradient-to-br from-violet-900/60 to-indigo-900/60 rounded-2xl shadow-2xl p-8 fade-in backdrop-blur-lg">
            <h2 class="text-3xl font-bold text-violet-200 mb-4 glow">Definición</h2>
            <p class="text-lg text-gray-200 leading-relaxed">
                El <strong class="text-violet-300">Middleware</strong> (software intermediario) son funciones que se ejecutan antes de que una petición llegue a su destino final y/o antes de que la respuesta se envíe al cliente.
            </p>
            <p class="mt-4 text-lg text-gray-200 leading-relaxed">
                💭 <em>Idea clave:</em> son “filtros” o “capas” que pueden inspeccionar, modificar o detener las peticiones y respuestas.
            </p>
        </section>


        <!-- Analogía -->
        <section class="bg-gradient-to-tl from-indigo-800/50 to-violet-800/50 rounded-2xl shadow-xl p-8 fade-in backdrop-blur-lg">
            <h2 class="text-3xl font-bold text-violet-200 mb-4 glow">Analogía del guardia de seguridad</h2>
            <p class="mb-4 italic text-indigo-200">Imaginá que la web es un edificio interestelar 🪐...</p>
            <ul class="list-disc pl-6 text-gray-100 space-y-2">
                <li><strong>Petición (Cliente):</strong> vos entrando a un edificio espacial.</li>
                <li><strong>Middleware (Guardia Cósmico):</strong> revisa tu identificación galáctica (autenticación).</li>
                <li><strong>Modifica:</strong> te entrega un pase holográfico (añade datos).</li>
                <li><strong>Detiene:</strong> si no tenés ID, no podés pasar (autorización).</li>
                <li><strong>Lógica de la Aplicación:</strong> el destino final, la oficina en el módulo lunar 🌙.</li>
            </ul>
        </section>


        <!-- Ciclo Petición-Respuesta -->
        <section class="bg-gradient-to-br from-indigo-900/60 to-violet-900/60 rounded-2xl shadow-2xl p-8 fade-in backdrop-blur-lg">
            <h2 class="text-3xl font-bold text-violet-200 mb-4 glow">Ciclo de Petición - Respuesta</h2>
            <ol class="list-decimal pl-6 text-gray-200 space-y-1">
                <li>El cliente envía una <strong>Petición (Request)</strong>.</li>
                <li>Middleware 1 se ejecuta (ej: logging).</li>
                <li>Middleware 2 se ejecuta (ej: autenticación).</li>
                <li>La petición llega al Controlador o Vista.</li>
                <li>Se genera una <strong>Respuesta (Response)</strong>.</li>
                <li>La respuesta pasa de vuelta por los Middlewares (en orden inverso).</li>
                <li>El Cliente recibe la respuesta final 🚀.</li>
            </ol>
        </section>


        <!-- Ejemplo de código -->
        <section class="bg-gradient-to-r from-indigo-800/50 to-violet-800/50 rounded-2xl shadow-xl p-8 fade-in backdrop-blur-lg">
            <h2 class="text-3xl font-bold text-violet-200 mb-4 glow">Ejemplo de Middleware en Laravel</h2>
            <pre class="bg-black/60 text-green-200 p-4 rounded-lg overflow-x-auto"><code>// app/Http/Middleware/CheckAge.php


public function handle($request, Closure $next)
{
    if ($request->age <= 18) {
        return redirect('home');
    }
    return $next($request);
}</code></pre>
        </section>


        <!-- Usos comunes -->
        <section class="bg-gradient-to-tl from-violet-900/70 to-indigo-900/70 rounded-2xl shadow-xl p-8 fade-in backdrop-blur-lg">
            <h2 class="text-3xl font-bold text-violet-200 mb-4 glow">Ejemplos de uso comunes</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-violet-700 text-left text-sm text-gray-100">
                    <thead class="bg-violet-800/70">
                        <tr>
                            <th class="border px-4 py-2">Uso</th>
                            <th class="border px-4 py-2">Descripción</th>
                        </tr>
                    </thead>
                    <tbody class="bg-indigo-950/30">
                        <tr><td class="border px-4 py-2">Autenticación</td><td class="border px-4 py-2">Verificar si el usuario está logueado.</td></tr>
                        <tr><td class="border px-4 py-2">Autorización</td><td class="border px-4 py-2">Comprobar si el usuario tiene permisos.</td></tr>
                        <tr><td class="border px-4 py-2">Logging</td><td class="border px-4 py-2">Registrar cada petición que llega al servidor.</td></tr>
                        <tr><td class="border px-4 py-2">Manejo de CORS</td><td class="border px-4 py-2">Permitir o denegar peticiones externas.</td></tr>
                        <tr><td class="border px-4 py-2">Sanitización</td><td class="border px-4 py-2">Limpiar datos de entrada para prevenir inyección de código.</td></tr>
                    </tbody>
                </table>
            </div>
        </section>
<section class="mt-10 bg-violet-900/40 p-6 rounded-2xl backdrop-blur-md shadow-xl text-center">
    <h2 class="text-2xl font-bold text-violet-100 mb-4 glow">🎬 Video explicativo</h2>
    <video controls autoplay loop muted playsinline
           class="mx-auto rounded-xl shadow-lg border border-violet-700 w-full max-w-3xl">
        <source src="{{ asset('images/middleware_video.mp4') }}" type="video/mp4">


        Tu navegador no soporta la reproducción de video.
    </video>
</section>
    </main>


    <!-- Footer -->
    <footer class="py-6 bg-gradient-to-r from-indigo-800 to-violet-900 text-center shadow-inner mt-12">
        <p class="text-gray-200 text-sm">
            ✨ Proyecto Laravel + GitHub - ECO 6 y ECO 7 | Desarrollado por
            <strong class="text-violet-300 glow">Torgen 🌧️</strong>
        </p>
    </footer>


</body>
</html>


