<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelos en Laravel: Una Guía Visual</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">

    <style>
        /* --- Estilos Base y Fondo Animado --- */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #020617; /* slate-950 */
            overflow-x: hidden;
        }

        .gradient-bg {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            background: linear-gradient(240deg, #0f766e, #1d4ed8, #150b70ff, #5f9ed8ff);
            background-size: 400% 400%;
            animation: gradientAnimation 25s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* --- Efecto Glassmorphism para las tarjetas --- */
        .glass-card {
            background: rgba(15, 23, 42, 0.6); /* slate-900 con 60% opacidad */
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(51, 65, 85, 0.5); /* slate-700 con 50% opacidad */
            border-radius: 1.5rem; /* 24px */
        }

        /* --- Animaciones de Scroll --- */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.165, 0.84, 0.44, 1), transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="text-slate-200">

    <div class="gradient-bg"></div>

    <main class="relative z-10 container mx-auto max-w-4xl px-4 py-12 md:py-24">
        
        <section class="min-h-screen flex flex-col justify-center text-center reveal">
            <h1 class="text-5xl md:text-7xl font-black text-white leading-tight">
                Modelos en <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500">Laravel</span>
            </h1>
            <p class="mt-6 text-lg md:text-xl text-slate-400 max-w-2xl mx-auto">
                Descubre cómo Laravel habla con tu base de datos de forma elegante con Eloquent.
            </p>
            <div class="mt-20 animate-bounce">
                <svg class="w-8 h-8 mx-auto text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </div>
        </section>

        <section class="py-20 reveal">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white">¿Qué es un Modelo de Eloquent?</h2>
                <p class="mt-4 text-slate-400">Es el puente entre tu código y tus datos.</p>
            </div>
            <div class="grid md:grid-cols-5 gap-8 items-center">
                <div class="md:col-span-3 text-slate-300 space-y-4 text-base leading-relaxed">
                    <p>Un Modelo en Laravel es una clase de PHP que representa una tabla en tu base de datos. Es la "M" en el patrón de diseño "MVC" (Modelo-Vista-Controlador).</p>
                    <p>Laravel incluye Eloquent, un ORM (Mapeador Objeto-Relacional) que te permite interactuar con tus datos como si fueran objetos, en lugar de escribir complejas consultas SQL.</p>
                </div>
                <div class="md:col-span-2">
                    <div class="glass-card p-6 shadow-2xl shadow-blue-500/10">
                        <h3 class="font-bold text-teal-400 mb-2">Analogía: Ficha de Contacto 📇</h3>
                        <p class="text-slate-400 text-sm">El modelo `Contacto` es como la plantilla de una ficha. Cada objeto que creas a partir de ese modelo (`new Contacto`) es una ficha real y completa con los datos de una persona específica.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 reveal">
             <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white">Convención sobre Configuración</h2>
                <p class="mt-4 text-slate-400">Laravel hace suposiciones inteligentes para ahorrarte trabajo.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="glass-card p-8 transition-transform hover:scale-105 duration-300">
                    <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-teal-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                        <h3 class="text-xl font-bold text-white">Nombre del Modelo</h3>
                    </div>
                    <p class="mt-4 text-slate-400">Singular y en PascalCase. Ej: `Producto`</p>
                </div>
                <div class="glass-card p-8 transition-transform hover:scale-105 duration-300">
                     <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-teal-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                        <h3 class="text-xl font-bold text-white">Nombre de la Tabla</h3>
                    </div>
                    <p class="mt-4 text-slate-400">Plural y en snake_case. Ej: `productos`</p>
                </div>
                <div class="glass-card p-8 transition-transform hover:scale-105 duration-300">
                     <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-teal-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H5v-2H3v-2H1.75a1 1 0 01-.97-1.22L2.24 6.78A1 1 0 013.23 6h6.84a1 1 0 01.97 1.22L11.75 11" /></svg>
                        <h3 class="text-xl font-bold text-white">Clave Primaria</h3>
                    </div>
                    <p class="mt-4 text-slate-400">Laravel asume que se llama `id` y es auto-incremental.</p>
                </div>
                <div class="glass-card p-8 transition-transform hover:scale-105 duration-300">
                     <div class="flex items-center gap-4">
                        <svg class="w-8 h-8 text-teal-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <h3 class="text-xl font-bold text-white">Timestamps</h3>
                    </div>
                    <p class="mt-4 text-slate-400">Gestiona automáticamente las columnas `created_at` y `updated_at`.</p>
                </div>
            </div>
        </section>
        
        <section class="py-20 reveal">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white">Anatomía de un Modelo</h2>
                <p class="mt-4 text-slate-400">Así se ve el archivo `app/Models/Producto.php` por dentro.</p>
            </div>
            <div class="glass-card p-8 md:p-12 font-mono text-sm">
                <p class="text-slate-400">// app/Models/Producto.php</p>
                <br>
                <p><span class="text-purple-400">namespace</span> <span class="text-slate-200">App\Models;</span></p>
                <br>
                <p><span class="text-purple-400">use</span> <span class="text-slate-200">Illuminate\Database\Eloquent\Factories\HasFactory;</span></p>
                <p><span class="text-purple-400">use</span> <span class="text-slate-200">Illuminate\Database\Eloquent\Model;</span></p>
                <br>
                <p><span class="text-purple-400">class</span> <span class="text-teal-400">Producto</span> <span class="text-purple-400">extends</span> <span class="text-teal-400">Model</span></p>
                <p>{</p>
                <p class="pl-4"><span class="text-purple-400">use</span> <span class="text-slate-200">HasFactory;</span></p>
                <br>
                <p class="pl-4 text-slate-500">/** Asignación Masiva: campos que se pueden llenar de forma segura. */</p>
                <p class="pl-4"><span class="text-purple-400">protected</span> <span class="text-blue-400">$fillable</span> = [</p>
                <p class="pl-8"><span class="text-yellow-400">'nombre'</span>,</p>
                <p class="pl-8"><span class="text-yellow-400">'descripcion'</span>,</p>
                <p class="pl-8"><span class="text-yellow-400">'precio'</span>,</p>
                <p class="pl-8"><span class="text-yellow-400">'stock'</span>,</p>
                <p class="pl-4">];</p>
                <p>}</p>
            </div>
        </section>

        <section class="py-20 reveal">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white">Eloquent en Acción: CRUD Básico</h2>
                <p class="mt-4 text-slate-400">Así interactúas con la base de datos sin escribir una línea de SQL.</p>
            </div>
            <div class="bg-[#0d1117] rounded-xl border border-slate-700 shadow-2xl">
                <div class="flex items-center justify-between px-4 py-2 border-b border-slate-700">
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                        <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                    </div>
                    <span class="text-sm text-slate-400">ProductoController.php</span>
                    <button id="copy-button" class="text-sm text-slate-400 hover:text-white transition">Copiar</button>
                </div>
                <div class="p-6">
                    <pre class="code-block"><code id="code-snippet" class="language-php">
// CREAR un nuevo producto
Producto::create(['nombre' => 'Laptop Gamer', 'precio' => 1500]);

// LEER todos los productos
$productos = Producto::all();

// LEER un producto específico por su ID
$producto = Producto::find(1);

// ACTUALIZAR un producto
$producto->precio = 1450;
$producto->save();

// BORRAR un producto
$producto->delete();
</code></pre>
                </div>
            </div>
        </section>

    </main>
    
    <footer class="text-center py-8">
        <p class="text-slate-500 text-sm">Diseño y contenido listos para tu presentación.</p>
    </footer>

    <script>
        // --- Lógica para animaciones de scroll ---
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });

        // --- Lógica para copiar código ---
        const copyButton = document.getElementById('copy-button');
        const codeSnippet = document.getElementById('code-snippet').innerText;

        copyButton.addEventListener('click', () => {
            navigator.clipboard.writeText(codeSnippet).then(() => {
                copyButton.innerText = '¡Copiado!';
                setTimeout(() => {
                    copyButton.innerText = 'Copiar';
                }, 2000);
            }).catch(err => {
                console.error('Error al copiar: ', err);
            });
        });
    </script>

</body>
</html>