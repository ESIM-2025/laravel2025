<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentación de Nico</title>

    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #111827; /* Fondo gris oscuro */
            overflow-x: hidden;
        }

        /* Fondo de gradiente animado */
        .gradient-bg {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            background: linear-gradient(240deg, #1d4ed8, #311b92, #111827);
            background-size: 400% 400%;
            animation: gradientAnimation 20s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Efecto "Glassmorphism" para la tarjeta */
        .glass-card {
            background: rgba(17, 24, 39, 0.75); /* gris-900 con 75% opacidad */
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(55, 65, 81, 0.5); /* gris-700 con 50% opacidad */
            border-radius: 1.5rem; /* 24px */
        }
    </style>
</head>
<body class="text-slate-200">

    <div class="gradient-bg"></div>

    <div class="relative z-10 flex items-center justify-center min-h-screen py-12 px-4">

        <div class="glass-card max-w-2xl w-full p-8 md:p-10 shadow-2xl">

            <header class="text-center mb-8">
                <div class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-blue-400 overflow-hidden">
    <img src="{{ asset('images/nicolas.jpg') }}" alt="Foto de perfil de Nicolás" class="w-full h-full object-cover">
</div>
                <h1 class="text-4xl font-black text-white">Nicolás Perez</h1>
                <p class="text-xl text-blue-300 mt-1">Estudiante y Desarrollador en formación</p>
                
                <div class="mt-4 text-base text-slate-300">
                    <p>Tengo 18 años y soy de Posadas, Misiones.</p>
                    <p>Estudiante de la Secundaria de Innovación.</p>
                </div>
            </header>

            <hr class="border-slate-700 my-8">

            <div>
                <h2 class="flex items-center text-2xl font-bold text-white mb-4">
                    <svg class="w-6 h-6 mr-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.03 23.03 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Experiencia (Pasantías)
                </h2>
                <div class="bg-slate-800 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg text-blue-300">Desarrollador</h3>
                    <p class="text-slate-300 mt-1">Trabajé durante un mes en el desarrollo de un SDK (Software Development Kit), aprendiendo sobre integración de APIs y buenas prácticas de código.</p>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="flex items-center text-2xl font-bold text-white mb-4">
                    <svg class="w-6 h-6 mr-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Gustos y Hobbies
                </h2>
                <div class="grid grid-cols-2 gap-4 text-slate-300">
                    <span class="bg-slate-800 p-3 rounded-lg flex items-center">🎮 Jugar videojuegos (Especialmente los de supervivencia)</span>
                    <span class="bg-slate-800 p-3 rounded-lg flex items-center">💻 Programar (Php, Python, etc.)</span>
                    <span class="bg-slate-800 p-3 rounded-lg flex items-center">⚽ Mirar y jugar fútbol</span>
                    <span class="bg-slate-800 p-3 rounded-lg flex items-center">🦇 Los cómics de DC (Batman)</span>
                    <span class="bg-slate-800 p-3 rounded-lg flex items-center">🎬 Las peliculas de guerra</span>
                    <span class="bg-slate-800 p-3 rounded-lg flex items-center">👋 Pasar tiempo con amigos</span>
                </div>
            </div>

            <div class="mt-8">
                <h2 class="flex items-center text-2xl font-bold text-white mb-4">
                    <svg class="w-6 h-6 mr-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 3.5a1.5 1.5 0 013 0V5a1 1 0 01-1 1h-2a1 1 0 01-1-1V3.5zM10 8.5a1.5 1.5 0 013 0V10a1 1 0 01-1 1h-2a1 1 0 01-1-1V8.5zM7 3.5a1.5 1.5 0 00-3 0V5a1 1 0 001 1h2a1 1 0 001-1V3.5zM7 8.5a1.5 1.5 0 00-3 0V10a1 1 0 001 1h2a1 1 0 001-1V8.5zM6 13a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1z"></path></svg>
                    Mascotas
                </h2>
                <p class="text-slate-300 bg-slate-800 p-4 rounded-lg">¡Tengo una perrita increíble que se llama <span class="font-bold text-blue-300">Lila</span>! 🐶</p>
            </div>

        </div>
    </div>
</body>
</html>