<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oliver Torgen 🌌</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #2e1065, #312e81, #000);
            color: #d8b4fe;
            min-height: 100vh;
            overflow-y: auto;
        }

        #stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        img {
            transition: transform 0.5s;
        }

        img:hover {
            transform: scale(1.05);
        }

        /* 🔧 CORREGIDO: quitado min-height 100vh para evitar espacio extra */
        .content {
            position: relative;
            z-index: 10;
            padding: 80px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            gap: 100px;
        }

        .card {
            max-width: 600px;
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
            border: 1px solid #7e22ce;
            border-radius: 1.5rem;
            padding: 2.5rem;
            box-shadow: 0 0 20px rgba(126, 34, 206, 0.5);
            text-align: center;
        }

        .card img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #a855f7;
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.6);
            margin-bottom: 1.5rem;
        }

        .quote {
            font-style: italic;
            color: #c4b5fd;
        }

        /* 🎵 Reproductor cósmico */
        .player {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgba(20, 10, 40, 0.6);
            border: 1px solid #7e22ce;
            border-radius: 20px;
            padding: 1rem 1.5rem;
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.5);
            display: flex;
            align-items: center;
            gap: 15px;
            backdrop-filter: blur(10px);
            z-index: 100;
        }

        .player img {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            object-fit: cover;
        }

        .player .track-info {
            display: flex;
            flex-direction: column;
            color: #e9d5ff;
            font-size: 0.9rem;
        }

        .player .track-info span:first-child {
            font-weight: bold;
            color: #c084fc;
        }

        .player audio {
            height: 25px;
            accent-color: #a855f7;
        }

        /* ✨ Card de contacto centrada */
        .contacto-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 1rem;
            padding: 2rem;
        }

        /* QR rectángular */
        .qr-container {
            width: 250px;
            height: 250px;
            overflow: hidden;
            border: 2px solid #a855f7;
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.4);
            border-radius: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 0;
        }

        .qr-image {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 0 !important;
            border: none;
            display: block;
        }

        /* 🌙 Imagen final corregida */
        .final-image-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-top: 40px; /* suave separación, sin romper layout */
            z-index: 2;
            opacity: 0;
            transform: translateY(60px);
            transition: opacity 1.4s ease, transform 1.4s ease;
        }

        .final-image-container.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* 🚀 CORREGIDO: nada de height 100vh, ni desplazamientos negativos */
        .final-image {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
            filter: drop-shadow(0 0 25px rgba(180, 140, 255, 0.35));
        }

    </style>
</head>

<body>

    <canvas id="stars"></canvas>

    <div class="content fade-in">

        <div class="card">
            <img src="{{ asset('images/oliver.png') }}" alt="Foto de Oliver Torgen">
            <h1 class="text-4xl font-extrabold text-yellow-300 drop-shadow-lg mb-6 animate-pulse">
                🌌 ¡Hola! Soy Oliver Noel Klaus Torgen
            </h1>
            <p class="text-lg text-purple-200 mb-4">
                Aficionado en programación. Apasionado por la aviación, el diseño y la arquitectura.
            </p>
            <p class="text-lg text-purple-200 mb-4">
                Tengo 18 años, mi cumple es el 19 de enero. Vivo en la Costanera de Posadas y soy estudiante de la secundaria de Innovación.
            </p>
            <p class="text-lg text-purple-200 mb-4">
                Me encanta crear proyectos que combinen tecnología y arte.
            </p>
            <p>Me describen como creativo, curioso, sensible pero también muy pragmático, disciplinado y perseverante.</p>
            <p>Artista, estudiante, escritor y un eterno aprendiz.</p>
            <p class="quote">“La creatividad florece cuando el alma encuentra su propio ritmo.”</p>
        </div>

        <div class="card">
            <p class="text-purple-200">
                🌠 Proyecto de 5to año en equipo ECO 6 + ECO 7 Github + Laravel
            </p>
        </div>

        <!-- 🪐 Card de contacto -->
        <div class="card contacto-card">
            <h2 class="text-2xl font-bold text-yellow-300 mb-4">Podés seguirme en Instagram:</h2>
            <a href="https://www.instagram.com/cwtsholiver/" 
               target="_blank" 
               class="text-lg font-semibold text-pink-400 hover:text-pink-300 transition">
               @cwtsholiver
            </a>

            <div class="qr-container">
                <img src="{{ asset('images/qr_instagram.png') }}" alt="QR Instagram Oliver" class="qr-image">
            </div>
        </div>

        <div class="card">
            <p class="text-purple-200">💫 Gracias por pasar por mi universo.</p>
            <p class="text-purple-200">🌙 Ojalá algo de acá te inspire a crear.</p>
        </div>

    </div>

    <!-- 🎶 Reproductor cósmico -->
    <div class="player">
        <img src="{{ asset('images/oliver.png') }}" alt="Portada del tema">
        <div class="track-info">
            <span>Oliver 🌧️ dice: </span>
            <span>“Una canción muy mía”</span>
        </div>
        <audio controls autoplay loop>
            <source src="{{ asset('audio/fondo.mp3') }}" type="audio/mpeg">
            Tu navegador no soporta el audio.
        </audio>
    </div>

    <!-- 🌌 Imagen final corregida -->
    <div class="final-image-container">
        <img src="{{ asset('images/fondo_final.png') }}" alt="Decoración final" class="final-image">
    </div>

    <script>
        const canvas = document.getElementById('stars');
        const ctx = canvas.getContext('2d');
        let stars = [];

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        function createStars() {
            stars = [];
            for (let i = 0; i < 150; i++) {
                stars.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    size: Math.random() * 2,
                    speed: Math.random() * 0.5 + 0.2
                });
            }
        }

        function drawStars() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = "#fff";
            stars.forEach(star => {
                ctx.beginPath();
                ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2);
                ctx.fill();
                star.y += star.speed;
                if (star.y > canvas.height) star.y = 0;
            });
            requestAnimationFrame(drawStars);
        }

        window.addEventListener('resize', () => {
            resizeCanvas();
            createStars();
        });

        resizeCanvas();
        createStars();
        drawStars();
    </script>

    <script>
        document.addEventListener("scroll", function() {
            const finalImage = document.querySelector(".final-image-container");
            const rect = finalImage.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            if (rect.top < windowHeight - 100) {
                finalImage.classList.add("visible");
            }
        });
    </script>

</body>
</html>
