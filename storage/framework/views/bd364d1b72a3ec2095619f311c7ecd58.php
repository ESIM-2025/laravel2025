<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔥 Validación - Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(45deg, #ff6b6b, #feca57, #48dbfb, #ff9ff3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        
        .code-block {
            background: #1a1a1a;
            border-left: 4px solid #48dbfb;
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body class="text-gray-800">
    <!-- Header Hero -->
    <header class="relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 text-center text-white py-20">
            <div class="container mx-auto px-4">
                <h1 class="text-6xl font-bold mb-4 gradient-text">
                    <i class="fas fa-shield-alt mr-4"></i>
                    Validación Laravel
                </h1>
                <p class="text-2xl mb-8 opacity-90">Domina la validación en Laravel como un Pro 🚀</p>
                <div class="pulse-animation">
                    <a href="#empezar" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-8 py-4 rounded-full text-lg font-semibold hover:from-purple-600 hover:to-pink-600 transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-rocket mr-2"></i>
                        Empezar Ahora
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 glass-effect shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="text-white text-xl font-bold">
                    <i class="fas fa-code mr-2"></i>
                    Validación-Laravel
                </div>
                <div class="flex space-x-6">
                    <a href="#que-es" class="text-white hover:text-yellow-300 transition">¿Qué es?</a>
                    <a href="#ejemplos" class="text-white hover:text-yellow-300 transition">Ejemplos</a>
                    <a href="#beneficios" class="text-white hover:text-yellow-300 transition">Beneficios</a>
                    <a href="#codigo" class="text-white hover:text-yellow-300 transition">Código</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        
        <!-- ¿Qué es la Validación? -->
        <section id="que-es" class="mb-16">
            <div class="glass-effect rounded-2xl p-8 shadow-2xl">
                <h2 class="text-4xl font-bold text-white mb-6 text-center">
                    <i class="fas fa-question-circle mr-3"></i>
                    ¿Qué es la Validación en Laravel?
                </h2>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <p class="text-lg text-white mb-4">
                            La validación es como el <span class="text-yellow-300 font-semibold">guardián de seguridad</span> de tu aplicación web. Se asegura de que los datos que entran sean correctos, seguros y cumplan con las reglas que tú defines.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center text-white">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                                <span>Protege tu aplicación de datos maliciosos</span>
                            </div>
                            <div class="flex items-center text-white">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                                <span>Mejora la experiencia del usuario</span>
                            </div>
                            <div class="flex items-center text-white">
                                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                                <span>Mantiene tu base de datos limpia</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="inline-block p-6 bg-white rounded-2xl shadow-lg">
                            <i class="fas fa-user-shield text-6xl text-blue-500 mb-4"></i>
                            <p class="text-gray-600 font-semibold">Tu Guardián de Datos</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ejemplos Interactivos -->
        <section id="ejemplos" class="mb-16">
            <h2 class="text-4xl font-bold text-white text-center mb-8">
                <i class="fas fa-code mr-3"></i>
                Ejemplos Prácticos
            </h2>
            
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Ejemplo 1 -->
                <div class="glass-effect rounded-2xl p-6 hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-exclamation-triangle text-white text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Validación Básica</h3>
                    </div>
                    <p class="text-white mb-4">Evita que los usuarios envíen formularios vacíos o con datos incorrectos.</p>
                    <div class="code-block rounded-lg p-4 text-green-400 font-mono text-sm">
                        $request->validate([<br>
                        &nbsp;&nbsp;'nombre' => 'required|min:3',<br>
                        &nbsp;&nbsp;'email' => 'required|email',<br>
                        &nbsp;&nbsp;'edad' => 'numeric|min:18'<br>
                        ]);
                    </div>
                </div>

                <!-- Ejemplo 2 -->
                <div class="glass-effect rounded-2xl p-6 hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-lock text-white text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Contraseñas Seguras</h3>
                    </div>
                    <p class="text-white mb-4">Asegura contraseñas fuertes con confirmación.</p>
                    <div class="code-block rounded-lg p-4 text-green-400 font-mono text-sm">
                        'password' => 'required|confirmed|min:8'<br>
                        'password_confirmation' => 'required'
                    </div>
                </div>

                <!-- Ejemplo 3 -->
                <div class="glass-effect rounded-2xl p-6 hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-upload text-white text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Archivos e Imágenes</h3>
                    </div>
                    <p class="text-white mb-4">Controla los archivos que suben los usuarios.</p>
                    <div class="code-block rounded-lg p-4 text-green-400 font-mono text-sm">
                        'foto' => 'image|max:2048|mimes:jpg,png',<br>
                        'documento' => 'file|max:5120|mimes:pdf,doc'
                    </div>
                </div>

                <!-- Ejemplo 4 -->
                <div class="glass-effect rounded-2xl p-6 hover-lift">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-unique text-white text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white">Datos Únicos</h3>
                    </div>
                    <p class="text-white mb-4">Evita duplicados en la base de datos.</p>
                    <div class="code-block rounded-lg p-4 text-green-400 font-mono text-sm">
                        'email' => 'unique:users,email',<br>
                        'username' => 'unique:users,username'
                    </div>
                </div>
            </div>
        </section>

        <!-- Beneficios -->
        <section id="beneficios" class="mb-16">
            <div class="glass-effect rounded-2xl p-8">
                <h2 class="text-4xl font-bold text-white text-center mb-12">
                    <i class="fas fa-trophy mr-3"></i>
                    ¿Por qué Usar Validación?
                </h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover-lift">
                        <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Seguridad</h3>
                        <p class="text-gray-600">Protege tu aplicación de ataques y datos maliciosos.</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover-lift">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-check text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">UX Mejorada</h3>
                        <p class="text-gray-600">Usuarios reciben feedback inmediato sobre errores.</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-2xl shadow-lg hover-lift">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-database text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Datos Limpios</h3>
                        <p class="text-gray-600">Mantiene tu base de datos consistente y confiable.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Código de Ejemplo -->
        <section id="codigo" class="mb-16">
            <h2 class="text-4xl font-bold text-white text-center mb-8">
                <i class="fas fa-laptop-code mr-3"></i>
                Implementación en Código
            </h2>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Formulario de Ejemplo -->
                <div class="glass-effect rounded-2xl p-6">
                    <h3 class="text-2xl font-bold text-white mb-4">Formulario de Registro</h3>
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <form id="demoForm" class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nombre completo *</label>
                                <input type="text" name="nombre" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Tu nombre">
                                <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                <input type="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="tu@email.com">
                                <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Contraseña *</label>
                                <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Mínimo 8 caracteres">
                                <div class="error-message text-red-500 text-sm mt-1 hidden"></div>
                            </div>

                            <button type="button" onclick="validarFormulario()" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-3 rounded-lg font-semibold hover:from-blue-600 hover:to-purple-700 transition">
                                Validar Formulario
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Código Laravel -->
                <div class="glass-effect rounded-2xl p-6">
                    <h3 class="text-2xl font-bold text-white mb-4">Código Laravel</h3>
                    <div class="code-block rounded-xl p-6">
                        <pre class="text-green-400 text-sm"><code>// En tu controlador
public function store(Request $request)
{
    $validated = $request->validate([
        'nombre' => 'required|min:3|max:50',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed'
    ], [
        'nombre.required' => 'El nombre es obligatorio',
        'email.unique' => 'Este email ya está registrado',
        'password.min' => 'La contraseña debe tener 8 caracteres'
    ]);

    // Los datos ya están validados ✅
    User::create($validated);

    return back()->with('success', 'Usuario registrado!');
}</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section id="empezar" class="text-center">
            <div class="glass-effect rounded-2xl p-12">
                <h2 class="text-4xl font-bold text-white mb-6">¿Listo para Dominar la Validación?</h2>
                <p class="text-xl text-white mb-8">Comienza a implementar validaciones robustas en tus proyectos Laravel hoy mismo.</p>
                <div class="space-x-4">
                    <button onclick="mostrarTips()" class="bg-yellow-500 text-white px-8 py-4 rounded-full font-semibold hover:bg-yellow-600 transition transform hover:scale-105">
                        <i class="fas fa-lightbulb mr-2"></i>
                        Ver Tips Pro
                    </button>
                    <button onclick="descargarEjemplos()" class="bg-green-500 text-white px-8 py-4 rounded-full font-semibold hover:bg-green-600 transition transform hover:scale-105">
                        <i class="fas fa-download mr-2"></i>
                        Descargar Ejemplos
                    </button>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="glass-effect text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center space-x-6 mb-4">
                <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-github text-2xl"></i></a>
                <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-laravel text-2xl"></i></a>
                <a href="#" class="hover:text-yellow-300 transition"><i class="fab fa-php text-2xl"></i></a>
            </div>
            <p class="opacity-75">Creado con ❤️ para el tutorial de validación</p>
            <p class="opacity-50 text-sm mt-2">Laravel Validation Mastery - 2024</p>
        </div>
    </footer>

    <!-- JavaScript para la demo -->
    <script>
        function validarFormulario() {
            const form = document.getElementById('demoForm');
            const inputs = form.querySelectorAll('input');
            let isValid = true;

            // Limpiar errores anteriores
            document.querySelectorAll('.error-message').forEach(el => {
                el.classList.add('hidden');
            });

            inputs.forEach(input => {
                const errorElement = input.nextElementSibling;
                
                if (input.name === 'nombre' && input.value.length < 3) {
                    errorElement.textContent = 'El nombre debe tener al menos 3 caracteres';
                    errorElement.classList.remove('hidden');
                    isValid = false;
                }
                
                if (input.name === 'email' && !input.value.includes('@')) {
                    errorElement.textContent = 'Debe ser un email válido';
                    errorElement.classList.remove('hidden');
                    isValid = false;
                }
                
                if (input.name === 'password' && input.value.length < 8) {
                    errorElement.textContent = 'La contraseña debe tener al menos 8 caracteres';
                    errorElement.classList.remove('hidden');
                    isValid = false;
                }
            });

            if (isValid) {
                alert('✅ ¡Formulario válido! Todos los datos son correctos.');
            }
        }

        function mostrarTips() {
            const tips = [
                "💡 Usa 'bail' para detener la validación en el primer error",
                "💡 Crea reglas personalizadas para lógica compleja",
                "💡 Usa Form Requests para validaciones más organizadas",
                "💡 Aprovecha las reglas de base de datos como 'unique' y 'exists'",
                "💡 Personaliza mensajes de error para mejor UX"
            ];
            
            alert("Tips Pro de Validación:\n\n" + tips.join('\n'));
        }

        function descargarEjemplos() {
            alert('📥 ¡Ejemplos descargados! Revisa tu carpeta de descargas.');
        }

        // Smooth scroll para navegación
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html><?php /**PATH C:\Users\Usuario\feature-validacion2\feature_validacion\resources\views/validacion.blade.php ENDPATH**/ ?>