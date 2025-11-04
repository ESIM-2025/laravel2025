<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Personal - Ludmila Arias</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
    .fade-in { animation: fadeIn 1s ease forwards; opacity: 0; }
    @keyframes fadeIn { to { opacity: 1; } }

    .card-hover:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        transition: all 0.3s ease;
    }
</style>
</head>
<body class="bg-gradient-to-b from-pink-50 via-white to-purple-50 font-sans text-gray-800">

<!-- Header -->
<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <h1 class="text-2xl font-bold text-pink-600">Ludmila Arias</h1>
        <nav class="space-x-6 text-gray-700 font-medium">
            <a href="#sobre-mi" class="hover:text-pink-600 transition">Sobre mí</a>
            <a href="#proyectos" class="hover:text-pink-600 transition">Proyectos</a>
            <a href="#contacto" class="hover:text-pink-600 transition">Contacto</a>
        </nav>
    </div>
</header>

<!-- Hero -->
<section class="text-center py-16">
    <img src="{{ asset('images/avatar.png') }}" alt="Foto de perfil" class="mx-auto w-40 h-40 rounded-full border-4 border-pink-300 shadow-lg">
    <h2 class="text-5xl font-extrabold mt-6 text-pink-600 fade-in">¡Hola! Soy Ludmila ✨</h2>
    <p class="mt-4 text-lg max-w-3xl mx-auto leading-relaxed fade-in delay-200">
        Estudiante apasionada por la <strong class="text-purple-600">genética</strong>, <strong class="text-purple-600">programación</strong> y <strong class="text-purple-600">robótica</strong>.  
        Amo aprender, crear y participar en proyectos que me desafían.
    </p>
    <div class="mt-6 flex justify-center gap-4 fade-in delay-400">
        <a href="https://instagram.com/lud_arias" target="_blank"
           class="bg-gradient-to-r from-pink-500 to-purple-500 text-white px-6 py-3 rounded-full shadow-lg hover:scale-105 transform transition duration-300">
           📷 Mi Instagram
        </a>
    </div>
</section>

<!-- Sobre mí -->
<section id="sobre-mi" class="py-16 px-6">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-purple-600 mb-6 fade-in">Sobre mí</h2>
        <p class="text-lg text-gray-700 leading-relaxed fade-in delay-200">
            Tengo 16 años, estudio en la Escuela de Innovación y me interesa la ciencia y la tecnología.  
            Formo parte del <strong>Parlamento Estudiantil</strong>, participo en la <strong>Olimpiada de Matemática</strong> y trabajo como <strong>niñera</strong>, aprendiendo responsabilidad y empatía.  
        </p>
        <p class="mt-4 text-lg text-gray-700 leading-relaxed fade-in delay-400">
            También participé en la <strong>World Robot Olympiad (WRO)</strong>, ganando la competencia nacional y viajando a <strong>Panamá</strong> para competir internacionalmente 🌍.  
            Fue una experiencia que me motivó a seguir creciendo en ciencia, robótica y trabajo en equipo.
        </p>
    </div>
</section>

<!-- Proyectos -->
<section id="proyectos" class="py-16 px-6 bg-white rounded-t-3xl shadow-inner">
    <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-pink-600 mb-12 fade-in">Proyectos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="p-6 bg-pink-50 rounded-2xl shadow-md card-hover fade-in">
                <img src="{{ asset('images/ninera.png') }}" alt="Trabajo Niñera" class="w-full rounded-lg mb-4">
                <h3 class="text-xl font-bold text-pink-600">Trabajo como Niñera 👶</h3>
                <p class="mt-2 text-gray-700 text-sm">Cuidar niños me enseñó paciencia, responsabilidad y creatividad. Una experiencia muy valiosa.</p>
            </div>

            <div class="p-6 bg-purple-50 rounded-2xl shadow-md card-hover fade-in delay-100">
                <img src="{{ asset('images/parlamento.png') }}" alt="Parlamento Estudiantil" class="w-full rounded-lg mb-4">
                <h3 class="text-xl font-bold text-purple-600">Parlamento Estudiantil 🏛️</h3>
                <p class="mt-2 text-gray-700 text-sm">Representé a mis compañeros, participé en debates y promoví la participación escolar.</p>
            </div>

            <div class="p-6 bg-indigo-50 rounded-2xl shadow-md card-hover fade-in delay-200">
                <img src="{{ asset('images/matematica.png') }}" alt="Olimpiada de Matemática" class="w-full rounded-lg mb-4">
                <h3 class="text-xl font-bold text-indigo-600">Olimpiada de Matemática ➕</h3>
                <p class="mt-2 text-gray-700 text-sm">Competencias de matemática que fortalecieron mi lógica y pensamiento analítico.</p>
            </div>

            <div class="p-6 bg-green-50 rounded-2xl shadow-md card-hover fade-in delay-300">
                <img src="{{ asset('images/wro.png') }}" alt="WRO Panamá" class="w-full rounded-lg mb-4">
                <h3 class="text-xl font-bold text-green-600">World Robot Olympiad 🤖🌍</h3>
                <p class="mt-2 text-gray-700 text-sm">Ganamos la competencia nacional y viajamos a Panamá a competir internacionalmente. Una experiencia inolvidable.</p>
            </div>

            <div class="p-6 bg-yellow-50 rounded-2xl shadow-md card-hover fade-in delay-400">
                <img src="{{ asset('images/programacion.png') }}" alt="Proyectos de Programación" class="w-full rounded-lg mb-4">
                <h3 class="text-xl font-bold text-yellow-600">Proyectos de Programación 💻</h3>
                <p class="mt-2 text-gray-700 text-sm">Páginas web y programas en HTML, CSS, Java y Python para aprender y aplicar mis conocimientos.</p>
            </div>

        </div>
    </div>
</section>

<!-- Contacto -->
<section id="contacto" class="py-16 px-6 text-center">
    <h2 class="text-4xl font-bold text-purple-600 mb-6 fade-in">Contacto</h2>
    <p class="text-lg text-gray-700 fade-in delay-200">Podés encontrarme en Instagram y seguir mis aventuras:</p>
    <a href="https://instagram.com/lud_arias" target="_blank"
       class="mt-4 inline-block bg-gradient-to-r from-pink-500 to-purple-500 text-white px-6 py-3 rounded-full shadow-lg hover:scale-105 transform transition duration-300 fade-in delay-400">
       @lud_arias
    </a>
</section>

<!-- Footer -->
<footer class="py-6 bg-white mt-12 text-center shadow-inner">
    <p class="text-gray-600">© 2025 Ludmila Arias. Todos los derechos reservados.</p>
</footer>

</body>
</html>


