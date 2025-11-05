<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feature Auth - Autenticación Básica</title>
  <style>
    /* 🎨 ESTILO GLOBAL */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      overflow-x: hidden;
    }

    header {
      text-align: center;
      padding: 60px 20px;
      background: rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    header h1 {
      font-size: 3em;
      color: #00ffff;
      text-shadow: 0 0 20px #00ffff;
      animation: glow 3s infinite alternate;
    }

    @keyframes glow {
      from { text-shadow: 0 0 10px #00ffff; }
      to { text-shadow: 0 0 30px #00ffff, 0 0 50px #00ffff; }
    }

    header p {
      margin-top: 10px;
      color: #cceeff;
      font-size: 1.2em;
    }

    section {
      padding: 60px 15%;
    }

    h2 {
      color: #00ffff;
      margin-bottom: 15px;
      font-size: 2em;
      border-left: 5px solid #00ffff;
      padding-left: 10px;
    }

    p {
      font-size: 1.1em;
      margin-bottom: 20px;
      color: #e0f7fa;
    }

    ul {
      list-style: none;
      padding-left: 0;
    }

    li {
      background: rgba(255, 255, 255, 0.1);
      margin: 10px 0;
      padding: 15px;
      border-radius: 10px;
      transition: transform 0.3s, background 0.3s;
    }

    li:hover {
      transform: translateX(10px);
      background: rgba(0, 255, 255, 0.2);
    }

    .card {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 15px;
      padding: 30px;
      margin: 30px 0;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
      transition: all 0.4s;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.6);
    }

    .btn {
      display: inline-block;
      padding: 12px 25px;
      background: #00ffff;
      color: #000;
      border: none;
      border-radius: 25px;
      font-weight: bold;
      margin-top: 15px;
      cursor: pointer;
      transition: all 0.3s;
    }

    .btn:hover {
      background: #00cccc;
      box-shadow: 0 0 15px #00ffff;
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 30px;
      background: rgba(0, 0, 0, 0.5);
      font-size: 0.9em;
      color: #ccc;
    }

    /* ✨ ANIMACIONES SCROLL */
    .fade-in {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* 🔹 RESPONSIVE */
    @media (max-width: 768px) {
      section {
        padding: 40px 8%;
      }
      header h1 {
        font-size: 2.2em;
      }
      h2 {
        font-size: 1.5em;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>🔐 Feature Auth</h1>
    <p>Autenticación básica en Laravel - Grupo 10</p>
  </header>

  <section>
    <div class="card fade-in">
      <h2>¿Qué es Feature Auth?</h2>
      <p>
        En Laravel, <span style="color:#00ffff; font-weight:bold;">Feature Auth</span> se refiere a la funcionalidad de autenticación básica que permite 
        a los usuarios <b>registrarse, iniciar sesión y cerrar sesión</b> de manera segura.
      </p>
      <p>
        Laravel proporciona herramientas como <b>Laravel Breeze</b>, <b>Laravel UI</b> o <b>Jetstream</b> 
        que simplifican la creación de un sistema de login totalmente funcional.
      </p>
    </div>

    <div class="card fade-in">
      <h2>¿Cómo funciona?</h2>
      <p>
        La autenticación básica se basa en tres pilares fundamentales:
      </p>
      <ul>
        <li><b>1️⃣ Registro:</b> el usuario ingresa sus datos y se guardan en la base de datos.</li>
        <li><b>2️⃣ Inicio de sesión:</b> el sistema valida las credenciales con la información almacenada.</li>
        <li><b>3️⃣ Middleware “auth”:</b> protege rutas para que solo usuarios autenticados accedan.</li>
      </ul>
    </div>

    <div class="card fade-in">
      <h2>Comandos principales</h2>
      <ul>
        <li><code>composer require laravel/breeze --dev</code></li>
        <li><code>php artisan breeze:install</code></li>
        <li><code>php artisan migrate</code></li>
        <li><code>php artisan serve</code></li>
      </ul>
      <p>Estos comandos crean automáticamente las vistas, controladores y rutas necesarias para la autenticación.</p>
    </div>

    <div class="card fade-in">
      <h2>Beneficios del sistema de autenticación</h2>
      <ul>
        <li>✅ Seguridad mediante contraseñas cifradas con <b>bcrypt</b>.</li>
        <li>✅ Protección de rutas y sesiones seguras con tokens <b>CSRF</b>.</li>
        <li>✅ Facilidad para personalizar las vistas de login y registro.</li>
        <li>✅ Integración con bases de datos y controladores automáticos.</li>
      </ul>
    </div>

    <div class="card fade-in">
      <h2>Ejemplo visual</h2>
      <p>
        Una vez instalada la autenticación, el usuario puede:
      </p>
      <ul>
        <li>Registrarse con su nombre, email y contraseña.</li>
        <li>Iniciar sesión para acceder a su <b>Dashboard</b>.</li>
        <li>Cerrar sesión con un solo clic.</li>
      </ul>
      <button class="btn" id="demoBtn">Ver demostración</button>
    </div>
  </section>

  <footer>
    <p>© 2025 Grupo 10 - Proyecto Feature Auth | Hecho con ❤️ en Laravel</p>
  </footer>

  <script>
    // Animación de aparición al hacer scroll
    const elements = document.querySelectorAll('.fade-in');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) entry.target.classList.add('visible');
      });
    });
    elements.forEach(el => observer.observe(el));

    // Botón interactivo
    document.getElementById('demoBtn').addEventListener('click', () => {
      alert("En una aplicación real, el botón te llevaría al login o dashboard del usuario. 😉");
    });
  </script>

</body>
</html>
