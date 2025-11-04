<div class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-900 via-indigo-900 to-black overflow-hidden">
    
    <!-- Lienzo de estrellitas -->
    <canvas id="stars" class="absolute inset-0 w-full h-full"></canvas>
    
    <!-- Caja de presentación -->
    <div class="relative z-10 max-w-2xl bg-black/40 backdrop-blur-md rounded-2xl shadow-2xl p-10 border border-purple-700 text-center">
        
        <h1 class="text-4xl font-extrabold text-yellow-300 drop-shadow-lg mb-6 animate-pulse">
            🌌 Hola! Soy Oliver Torgen
        </h1>

        <p class="text-lg text-purple-200 mb-4">
            Tengo 18 años, vivo en la Costanera de Posadas y soy estudiante de la secundaria de Innovación, orientada a 
            <span class="text-yellow-200 font-semibold">informática</span> y 
            <span class="text-yellow-200 font-semibold">robótica</span> 🤖.  
        </p>
        
        <p class="text-lg text-purple-200 mb-4">
            Artista plástico y digital 🎨, buscando siempre mezclar creatividad con tecnología. 
            También me apasiona la arquitectura y la aviación desde pequeño!  
        </p>
        
        <p class="text-lg text-purple-300">
    ✨ Este es mi partial en el proyecto <span class="text-yellow-300 font-bold">Equipo ESIM 2025</span> 🌠
</p>

    </div>
</div>

<!-- Script de animación de estrellas -->
<script>
    const canvas = document.getElementById("stars");
    const ctx = canvas.getContext("2d");

    let stars = [];

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        createStars();
    }

    function createStars() {
        stars = [];
        for (let i = 0; i < 150; i++) {
            stars.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                radius: Math.random() * 2,
                speed: Math.random() * 0.5 + 0.2,
                alpha: Math.random() // para parpadeo
            });
        }
    }

    function drawStars() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        stars.forEach(star => {
            ctx.beginPath();
            ctx.globalAlpha = star.alpha; 
            ctx.fillStyle = "white";
            ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
            ctx.fill();
        });
        ctx.globalAlpha = 1; 
    }

    function updateStars() {
        stars.forEach(star => {
            star.y += star.speed;
            if (star.y > canvas.height) {
                star.y = 0;
                star.x = Math.random() * canvas.width;
            }
            // Efecto de parpadeo ✨
            star.alpha += (Math.random() - 0.5) * 0.05;
            if (star.alpha < 0.2) star.alpha = 0.2;
            if (star.alpha > 1) star.alpha = 1;
        });
    }

    function animate() {
        drawStars();
        updateStars();
        requestAnimationFrame(animate);
    }

    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();
    animate();
</script>
