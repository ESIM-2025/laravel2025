<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feature Auth - Autenticación Avanzada en Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'pink': {
                            300: '#f9a8d4',
                            400: '#f472b6',
                            500: '#ec4899',
                            600: '#db2777',
                            700: '#be185d',
                            800: '#9d174d',
                            900: '#831843'
                        },
                        'purple': {
                            300: '#d8b4fe',
                            400: '#c084fc',
                            500: '#a855f7',
                            600: '#9333ea',
                            700: '#7c3aed',
                            800: '#6b21a8',
                            900: '#581c87'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #1a0b2e;
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 20px 20px;
        }
        .text-glow {
            text-shadow: 0 0 8px rgba(236, 72, 153, 0.6), 0 0 20px rgba(236, 72, 153, 0.4);
        }
        .card {
            background: rgba(45, 15, 65, 0.5);
            border: 1px solid rgba(236, 72, 153, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px) scale(1.02);
            border-color: rgba(236, 72, 153, 0.5);
            box-shadow: 0 10px 30px rgba(236, 72, 153, 0.1);
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1a0b2e 0%, #2d0f41 100%);
        }
        .pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        @keyframes pulse-glow {
            0% { box-shadow: 0 0 5px rgba(236, 72, 153, 0.5); }
            50% { box-shadow: 0 0 20px rgba(236, 72, 153, 0.8); }
            100% { box-shadow: 0 0 5px rgba(236, 72, 153, 0.5); }
        }
        .tab-button {
            transition: all 0.3s ease;
        }
        .tab-button.active {
            background-color: rgba(236, 72, 153, 0.2);
            border-color: rgba(236, 72, 153, 0.5);
        }
        .code-block {
            position: relative;
        }
        .copy-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(45, 15, 65, 0.8);
            border: 1px solid rgba(236, 72, 153, 0.3);
            color: #ec4899;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.8rem;
        }
        .copy-btn:hover {
            background: rgba(236, 72, 153, 0.2);
        }
        .feature-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(236, 72, 153, 0.1);
            margin-right: 10px;
        }
    </style>
</head>
<body class="text-gray-200">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 gradient-bg border-b border-gray-800 py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center">
                <div class="text-pink-400 text-xl font-bold tracking-wider">Feature Auth</div>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#features" class="text-gray-300 hover:text-pink-400 transition-colors">Características</a>
                <a href="#implementation" class="text-gray-300 hover:text-pink-400 transition-colors">Implementación</a>
                <a href="#security" class="text-gray-300 hover:text-pink-400 transition-colors">Seguridad</a>
                <a href="#resources" class="text-gray-300 hover:text-pink-400 transition-colors">Recursos</a>
            </div>
            <button class="md:hidden text-gray-300">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="text-center py-20 lg:py-32 px-4 overflow-hidden relative gradient-bg">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="absolute inset-0 top-0 h-full w-full bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:48px_48px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)]"></div>
        <div class="relative z-10 max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold text-pink-400 text-glow tracking-widest uppercase mb-6">
                Feature Auth
            </h1>
            <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto text-gray-300 mb-8">
                La solución de autenticación segura y escalable integrada en el ecosistema Laravel.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-8">
                <a href="#implementation" class="bg-pink-600 hover:bg-pink-700 text-white font-medium py-3 px-6 rounded-lg transition-colors pulse-glow">
                    Comenzar Ahora
                </a>
                <a href="#features" class="border border-pink-500 text-pink-400 hover:bg-pink-900/30 font-medium py-3 px-6 rounded-lg transition-colors">
                    Explorar Características
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-16">
        
        <!-- Features Section -->
        <section id="features" class="mb-20">
            <h2 class="text-3xl font-bold text-center text-pink-400 mb-12">Características Principales</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- ¿Qué es Feature Auth? -->
                <div class="card rounded-2xl p-8 lg:col-span-2 fade-in">
                    <h2 class="text-2xl font-semibold text-pink-400 mb-4 flex items-center">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        ¿Qué es Feature Auth?
                    </h2>
                    <p class="text-gray-400 leading-relaxed">
                        <strong>Feature Auth</strong> en Laravel se refiere al conjunto de funcionalidades que gestionan el ciclo de vida de la autenticación de usuarios: <strong>registro, inicio y cierre de sesión</strong>. Es el pilar de seguridad de cualquier aplicación, garantizando que solo los usuarios autorizados accedan a datos y secciones protegidas.
                    </p>
                    <p class="mt-4 text-gray-400 leading-relaxed">
                        Laravel simplifica enormemente este proceso con paquetes como <strong>Laravel Breeze</strong> y <strong>Jetstream</strong>, que proveen una implementación completa y personalizable lista para usar.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Breeze</span>
                        <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Jetstream</span>
                        <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Sanctum</span>
                        <span class="bg-pink-900/30 text-pink-300 px-3 py-1 rounded-full text-sm">Fortify</span>
                    </div>
                </div>

                <!-- Funcionamiento -->
                <div class="card rounded-2xl p-8 fade-in">
                    <h2 class="text-2xl font-semibold text-pink-400 mb-4">Flujo de Autenticación</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="feature-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div>
                                <strong>Registro:</strong> Los datos del usuario se validan y se almacenan de forma segura en la base de datos, con la contraseña siempre encriptada.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon">
                                <i class="fas fa-sign-in-alt"></i>
                            </div>
                            <div>
                                <strong>Login:</strong> Laravel verifica las credenciales contra la base de datos y, si son correctas, establece una sesión segura.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <strong>Middleware:</strong> Actúa como un guardián para tus rutas, redirigiendo a los usuarios no autenticados.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon">
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                            <div>
                                <strong>Logout:</strong> Invalida y destruye la sesión del usuario de forma segura.
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Tabs Section -->
                <div class="card rounded-2xl p-8 lg:col-span-3 fade-in">
                    <h2 class="text-2xl font-semibold text-pink-400 mb-6">Opciones de Autenticación</h2>
                    
                    <div class="flex flex-wrap border-b border-gray-700 mb-6">
                        <button class="tab-button py-2 px-4 border-b-2 border-transparent text-gray-400 hover:text-pink-400 active" data-tab="breeze">
                            Laravel Breeze
                        </button>
                        <button class="tab-button py-2 px-4 border-b-2 border-transparent text-gray-400 hover:text-pink-400" data-tab="jetstream">
                            Laravel Jetstream
                        </button>
                        <button class="tab-button py-2 px-4 border-b-2 border-transparent text-gray-400 hover:text-pink-400" data-tab="sanctum">
                            Laravel Sanctum
                        </button>
                    </div>
                    
                    <div id="breeze" class="tab-content">
                        <h3 class="text-xl font-semibold text-pink-400 mb-4">Laravel Breeze</h3>
                        <p class="text-gray-400 mb-4">
                            Una implementación mínima y simple de todas las características de autenticación de Laravel. Incluye login, registro, verificación de email, recuperación de contraseña y confirmación de contraseña.
                        </p>
                        <div class="bg-gray-900/70 rounded-lg p-4 mb-4">
                            <h4 class="text-pink-400 font-semibold mb-2">Características:</h4>
                            <ul class="text-gray-400 list-disc pl-5 space-y-1">
                                <li>Interfaz de usuario construida con Blade</li>
                                <li>Tailwind CSS para el styling</li>
                                <li>Rutas de autenticación predefinidas</li>
                                <li>Fácil de personalizar</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="jetstream" class="tab-content hidden">
                        <h3 class="text-xl font-semibold text-pink-400 mb-4">Laravel Jetstream</h3>
                        <p class="text-gray-400 mb-4">
                            Una solución más robusta que incluye autenticación de dos factores, gestión de sesiones, gestión de equipos y integración con Laravel Sanctum para APIs.
                        </p>
                        <div class="bg-gray-900/70 rounded-lg p-4 mb-4">
                            <h4 class="text-pink-400 font-semibold mb-2">Características:</h4>
                            <ul class="text-gray-400 list-disc pl-5 space-y-1">
                                <li>Autenticación de dos factores</li>
                                <li>Gestión de sesiones y equipos</li>
                                <li>Integración con Laravel Sanctum</li>
                                <li>Interfaces disponibles en Livewire o Inertia</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="sanctum" class="tab-content hidden">
                        <h3 class="text-xl font-semibold text-pink-400 mb-4">Laravel Sanctum</h3>
                        <p class="text-gray-400 mb-4">
                            Proporciona un sistema de autenticación simple para SPAs (Single Page Applications), aplicaciones móviles y APIs simples basadas en tokens.
                        </p>
                        <div class="bg-gray-900/70 rounded-lg p-4 mb-4">
                            <h4 class="text-pink-400 font-semibold mb-2">Características:</h4>
                            <ul class="text-gray-400 list-disc pl-5 space-y-1">
                                <li>Autenticación basada en tokens</li>
                                <li>Compatibilidad con aplicaciones de una sola página</li>
                                <li>Gestión de permisos de API</li>
                                <li>Ligero y fácil de implementar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Implementation Section -->
        <section id="implementation" class="mb-20">
            <h2 class="text-3xl font-bold text-center text-pink-400 mb-12">Implementación</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <!-- Instalación -->
                <div class="card rounded-2xl p-8 fade-in">
                    <h2 class="text-2xl font-semibold text-pink-400 mb-4">Instalación Rápida con Breeze</h2>
                    <p class="text-gray-400 mb-4">Implementar un sistema de autenticación completo en Laravel es cuestión de minutos. Solo necesitas ejecutar estos comandos:</p>
                    <div class="code-block bg-gray-900/70 text-sm rounded-lg p-4 overflow-x-auto text-pink-300 font-mono border border-gray-700">
                        <button class="copy-btn" data-clipboard-target="#breeze-code">
                            <i class="fas fa-copy mr-1"></i> Copiar
                        </button>
                        <pre id="breeze-code"><code><span class="text-gray-500"># 1. Instalar Breeze</span>
composer require laravel/breeze --dev

<span class="text-gray-500"># 2. Publicar vistas, rutas y controladores</span>
php artisan breeze:install

<span class="text-gray-500"># 3. Compilar assets y migrar la base de datos</span>
npm install && npm run dev
php artisan migrate

<span class="text-gray-500"># 4. ¡Listo para lanzar!</span>
php artisan serve
</code></pre>
                    </div>
                </div>

                <!-- Protección de Rutas -->
                <div class="card rounded-2xl p-8 fade-in">
                    <h2 class="text-2xl font-semibold text-pink-400 mb-4">Protección de Rutas</h2>
                    <p class="text-gray-400 mb-4">Asegurar una ruta es tan simple como añadir el middleware `auth`:</p>
                    <div class="code-block bg-gray-900/70 text-sm rounded-lg p-4 font-mono text-white border border-gray-700 mb-4">
                        <button class="copy-btn" data-clipboard-target="#route-code">
                            <i class="fas fa-copy mr-1"></i> Copiar
                        </button>
                        <pre id="route-code"><code>Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);</code></pre>
                    </div>
                    <p class="text-gray-400 text-sm">Cualquier intento de acceso sin sesión será redirigido a la página de login.</p>
                    
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold text-pink-400 mb-2">Otros Middlewares Útiles</h3>
                        <ul class="text-gray-400 space-y-2">
                            <li><code class="bg-gray-800 px-2 py-1 rounded">auth:api</code> - Para autenticación de API</li>
                            <li><code class="bg-gray-800 px-2 py-1 rounded">verified</code> - Para usuarios con email verificado</li>
                            <li><code class="bg-gray-800 px-2 py-1 rounded">password.confirm</code> - Para confirmación de contraseña</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Security Section -->
        <section id="security" class="mb-20">
            <h2 class="text-3xl font-bold text-center text-pink-400 mb-12">Seguridad</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Ventajas -->
                <div class="card rounded-2xl p-8 fade-in">
                    <h2 class="text-2xl font-semibold text-pink-400 mb-4">Ventajas Clave</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <div class="feature-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div>
                                <strong>Seguridad Robusta:</strong> Utiliza Bcrypt para el hashing de contraseñas y protección CSRF integrada.
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="feature-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div>
                                <strong>Implementación Rápida:</strong> Con solo unos comandos tienes un sistema completo funcionando.
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="feature-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <div>
                                <strong>Totalmente Personalizable:</strong> Adapta cada aspecto del flujo de autenticación a tus necesidades.
                            </div>
                        </li>
                        <li class="flex items-center">
                            <div class="feature-icon">
                                <i class="fas fa-plug"></i>
                            </div>
                            <div>
                                <strong>Integración Nativa:</strong> Funciona perfectamente con el ecosistema Laravel.
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Medidas de Seguridad -->
                <div class="card rounded-2xl p-8 fade-in">
                    <h2 class="text-2xl font-semibold text-pink-400 mb-4">Medidas de Seguridad</h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="feature-icon mt-1">
                                <i class="fas fa-key"></i>
                            </div>
                            <div>
                                <strong>Hashing de Contraseñas:</strong> Laravel utiliza Bcrypt por defecto, uno de los algoritmos más seguros.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon mt-1">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <strong>Protección CSRF:</strong> Genera y valida tokens automáticamente para prevenir ataques.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon mt-1">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div>
                                <strong>Throttling:</strong> Limita los intentos de login para prevenir ataques de fuerza bruta.
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="feature-icon mt-1">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <strong>Verificación de Email:</strong> Opción para requerir verificación de correo electrónico.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- Resources Section -->
        <section id="resources" class="mb-20">
            <h2 class="text-3xl font-bold text-center text-pink-400 mb-12">Recursos Adicionales</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="card rounded-2xl p-6 text-center fade-in">
                    <div class="feature-icon mx-auto mb-4">
                        <i class="fas fa-book text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-pink-400 mb-3">Documentación</h3>
                    <p class="text-gray-400 mb-4">Consulta la documentación oficial de Laravel para detalles completos sobre autenticación.</p>
                    <a href="https://laravel.com/docs/authentication" target="_blank" class="inline-block bg-pink-600 hover:bg-pink-700 text-white font-medium py-2 px-4 rounded transition-colors">
                        Ver Documentación
                    </a>
                </div>
                
                <div class="card rounded-2xl p-6 text-center fade-in">
                    <div class="feature-icon mx-auto mb-4">
                        <i class="fas fa-video text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-pink-400 mb-3">Tutoriales</h3>
                    <p class="text-gray-400 mb-4">Aprende con tutoriales paso a paso sobre implementación de autenticación en Laravel.</p>
                    <a href="https://laracasts.com/series/laravel-8-from-scratch" target="_blank" class="inline-block bg-pink-600 hover:bg-pink-700 text-white font-medium py-2 px-4 rounded transition-colors">
                        Ver Tutoriales
                    </a>
                </div>
                
                <div class="card rounded-2xl p-6 text-center fade-in">
                    <div class="feature-icon mx-auto mb-4">
                        <i class="fas fa-code-branch text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-pink-400 mb-3">Repositorios</h3>
                    <p class="text-gray-400 mb-4">Explora el código fuente de Breeze, Jetstream y otros paquetes de autenticación.</p>
                    <a href="https://github.com/laravel/breeze" target="_blank" class="inline-block bg-pink-600 hover:bg-pink-700 text-white font-medium py-2 px-4 rounded transition-colors">
                        Ver en GitHub
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Conclusión -->
        <div class="card rounded-2xl p-8 text-center fade-in">
            <h2 class="text-2xl font-semibold text-pink-400 mb-4">Conclusión</h2>
            <p class="text-gray-400 max-w-3xl mx-auto leading-relaxed">
                El sistema <strong>Feature Auth</strong> de Laravel es una solución excepcional que equilibra perfectamente <strong>seguridad, simplicidad y flexibilidad</strong>. Permite a los desarrolladores enfocarse en construir funcionalidades únicas, mientras la autenticación, una de las partes más críticas, queda resuelta de manera profesional y eficiente.
            </p>
            <div class="mt-6 flex justify-center">
                <div class="inline-flex items-center bg-pink-900/30 text-pink-300 px-4 py-2 rounded-lg">
                    <i class="fas fa-heart text-pink-400 mr-2"></i>
                    <span>Hecho con Laravel y Tailwind CSS</span>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="text-center py-8 mt-16 border-t border-gray-800 gradient-bg">
        <div class="container mx-auto px-6">
            <p class="text-gray-500 mb-4">© 2025 Grupo 10 | Proyecto Feature Auth Laravel</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors">
                    <i class="fab fa-github text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-pink-400 transition-colors">
                    <i class="fab fa-linkedin text-xl"></i>
                </a>
            </div>
        </div>
    </footer>

    <script>
        // Animación de aparición al hacer scroll
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            const elements = document.querySelectorAll('.fade-in');
            elements.forEach(el => observer.observe(el));
            
            // Tabs functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons and contents
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.classList.remove('text-pink-400');
                        btn.classList.add('text-gray-400');
                    });
                    
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });
                    
                    // Add active class to clicked button
                    button.classList.add('active');
                    button.classList.add('text-pink-400');
                    button.classList.remove('text-gray-400');
                    
                    // Show corresponding content
                    const tabId = button.getAttribute('data-tab');
                    document.getElementById(tabId).classList.remove('hidden');
                });
            });
            
            // Copy to clipboard functionality
            const copyButtons = document.querySelectorAll('.copy-btn');
            
            copyButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const targetId = button.getAttribute('data-clipboard-target');
                    const targetElement = document.querySelector(targetId);
                    const textToCopy = targetElement.textContent;
                    
                    navigator.clipboard.writeText(textToCopy).then(() => {
                        // Visual feedback
                        const originalText = button.innerHTML;
                        button.innerHTML = '<i class="fas fa-check mr-1"></i> Copiado!';
                        
                        setTimeout(() => {
                            button.innerHTML = originalText;
                        }, 2000);
                    }).catch(err => {
                        console.error('Error al copiar: ', err);
                    });
                });
            });
        });
    </script>
</body>
</html>