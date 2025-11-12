<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial MVC (Grupo 4) - Explicación Detallada</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/flatly/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            line-height: 1.7;
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.05);
        }
        .hero-section {
            background: linear-gradient(45deg, #0d6efd, #6610f2);
            color: white;
            padding: 4rem 0;
            margin-bottom: 3rem;
            text-align: center;
            border-radius: 0.5rem;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .hero-section p {
            font-size: 1.25rem;
            opacity: 0.9;
        }
        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: #212529;
            margin-bottom: 1.5rem;
            border-bottom: 3px solid #0d6efd;
            padding-bottom: 0.5rem;
            display: inline-block;
        }
        .card {
            box-shadow: 0 4px 12px rgba(0,0,0,.08);
            border: none;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background-color: #0d6efd;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
        }
        .code-example {
            background-color: #282c34;
            color: #abb2bf;
            padding: 1.5rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
            border-radius: 0.5rem;
            font-family: 'Fira Code', 'Cascadia Code', monospace;
            white-space: pre;
            overflow-x: auto;
            font-size: 0.95rem;
        }
        .list-group-item {
            border-color: rgba(0,0,0,.08);
        }
        .footer {
            margin-top: 4rem;
            padding: 2rem 0;
            border-top: 1px solid #e9ecef;
            text-align: center;
            color: #6c757d;
        }
        .btn-back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            z-index: 1000;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            box-shadow: 0 2px 5px rgba(0,0,0,.2);
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

    <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Tutorial MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#introduccion">Introducción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modelo">Modelo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vista">Vista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#controlador">Controlador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ventajas">Ventajas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-content">
        
        <div class="hero-section">
            <h1 class="mb-3">Desmitificando el Modelo-Vista-Controlador (MVC)</h1>
            <p class="fs-4">
                Una guía esencial para entender la arquitectura fundamental de Laravel.
            </p>
            <p class="mt-3">
                <small><strong>Grupo 4:</strong> Ana y Piriz</small>
            </p>
        </div>

        <section id="introduccion" class="mb-5">
            <h2 class="section-title">¿Qué es el patrón MVC?</h2>
            <p>
                El patrón de diseño <strong>Modelo-Vista-Controlador (MVC)</strong> es una arquitectura que organiza
                las aplicaciones de software en tres componentes interconectados. Su objetivo principal es
                separar la representación interna de la información de las formas en que la información es
                presentada o aceptada por el usuario.
            </p>
            <p>
                Para entenderlo mejor, imaginemos nuestra aplicación como un **restaurante de lujo**:
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-success">Modelo (M)</div>
                        <div class="card-body">
                            <h5 class="card-title">La Cocina y el Chef</h5>
                            <p class="card-text">
                                Aquí es donde se preparan y gestionan los **ingredientes** (los datos). El chef (el Modelo)
                                sabe cómo obtener los ingredientes de la despensa (la base de datos).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-danger">Vista (V)</div>
                        <div class="card-body">
                            <h5 class="card-title">La Mesa y el Plato Servido</h5>
                            <p class="card-text">
                                Es lo que el **cliente ve** y con lo que interactúa. El plato (la Vista) es la presentación
                                de la comida al cliente (el usuario).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header bg-warning text-dark">Controlador (C)</div>
                        <div class="card-body">
                            <h5 class="card-title">El Camarero</h5>
                            <p class="card-text">
                                Es el **cerebro y el intermediario**. El camarero (el Controlador) toma la orden del
                                cliente (una petición HTTP), va a la cocina (Modelo) y sirve en la mesa (Vista).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="modelo" class="mb-5">
            <h2 class="section-title">1. El Modelo (M) en Laravel</h2>
            <div class="card">
                <div class="card-header">¿Qué es y Dónde Vive?</div>
                <div class="card-body">
                    <p>
                        El <strong>Modelo</strong> es la capa de la aplicación que interactúa directamente con
                        la base de datos. En Laravel, los Modelos son clases que representan tablas
                        en tu base de datos (esto se llama "Eloquent ORM").
                    </p>
                    <ul>
                        <li><strong>Responsabilidad:</strong> Gestionar datos (validarlos, guardarlos, recuperarlos, eliminarlos).</li>
                        <li><strong>Ubicación:</strong> Generalmente en la carpeta <code>app/Models/</code>.</li>
                        <li><strong>Características:</strong>
                            <ul>
                                <li>Cada instancia del Modelo corresponde a una fila en una tabla.</li>
                                <li>Permiten definir relaciones entre tablas (ej., un usuario tiene muchos posts).</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <h4>Ejemplo de un Modelo (<code>app/Models/Usuario.php</code>):</h4>
            <p>Este es un <strong>ejemplo de texto</strong> de cómo se ve un archivo de Modelo simple en Laravel:</p>
            
            <pre class="code-example">
&lt;?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    // protected $fillable define qué campos de la tabla
    // pueden ser asignados masivamente (ej. al usar create() o update()).
    protected $fillable = [
        'nombre', 
        'email', 
        'password',
    ];

    // protected $hidden oculta atributos sensibles al convertir el modelo a array/JSON.
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // protected $casts convierte atributos a tipos de datos específicos.
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
            </pre>
            </section>

        <section id="vista" class="mb-5">
            <h2 class="section-title">2. La Vista (V) en Laravel</h2>
            <div class="card">
                <div class="card-header">¿Qué es y Dónde Vive?</div>
                <div class="card-body">
                    <p>
                        La <strong>Vista</strong> es la parte de la aplicación responsable de presentar los
                        datos al usuario. Es el componente con el que el usuario interactúa
                        visualmente. En Laravel, las Vistas son archivos <code>.blade.php</code>.
                    </p>
                    <ul>
                        <li><strong>Responsabilidad:</strong> Mostrar información de forma atractiva.</li>
                        <li><strong>Ubicación:</strong> Dentro de la carpeta <code>resources/views/</code>.</li>
                        <li><strong>Características:</strong>
                            <ul>
                                <li>Contienen HTML, CSS, JavaScript y las directivas de Blade.</li>
                                <li>No deben contener lógica de negocio ni interactuar con la base de datos.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <h4>Ejemplo de una Vista (<code>resources/views/usuarios/lista.blade.php</code>):</h4>
            <p>Este es un <strong>ejemplo de texto</strong> de cómo se ve un archivo de Vista en Laravel, usando Blade:</p>

            <pre class="code-example">
&lt;!DOCTYPE html&gt;
&lt;html lang="es"&gt;
&lt;head&gt;
    &lt;title&gt;Lista de Usuarios&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Nuestros Usuarios&lt;/h1&gt;

    @ if (count($usuarios) > 0)
        &lt;ul&gt;
            { {-- 
              La Vista recibe una variable $usuarios
              (que le pasó el Controlador) y la recorre.
            --} }
            @ foreach ($usuarios as $usuario)
                &lt;li&gt;
                    &lt;strong&gt;Nombre:&lt;/strong&gt; { { $usuario->nombre } } &lt;br&gt;
                    &lt;strong&gt;Email:&lt;/strong&gt; { { $usuario->email } }
                &lt;/li&gt;
            @ endforeach
        &lt;/ul&gt;
    @ else
        &lt;p&gt;No hay usuarios registrados.&lt;/p&gt;
    @ endif
&lt;/body&gt;
&lt;/html&gt;
            </pre>
            </section>

        <section id="controlador" class="mb-5">
            <h2 class="section-title">3. El Controlador (C) en Laravel</h2>
            <div class="card">
                <div class="card-header">¿Qué es y Dónde Vive?</div>
                <div class="card-body">
                    <p>
                        El <strong>Controlador</strong> actúa como un intermediario entre el Modelo y la Vista.
                        Recibe las peticiones del usuario (a través de las rutas), procesa la lógica,
                        interactúa con los Modelos para obtener datos,
                        y finalmente, decide qué Vista debe mostrar al usuario.
                    </p>
                    <ul>
                        <li><strong>Responsabilidad:</strong> Recibir peticiones, coordinar Modelo y Vista.</li>
                        <li><strong>Ubicación:</strong> En la carpeta <code>app/Http/Controllers/</code>.</li>
                        <li><strong>Características:</strong>
                            <ul>
                                <li>Contienen la lógica principal para manejar una solicitud HTTP.</li>
                                <li>Son clases PHP con métodos para diferentes acciones (index, create, store, etc.).</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            
            <h4>Ejemplo de un Controlador (<code>app/Http-Controllers/UsuarioController.php</code>):</h4>
            <p>Este es un <strong>ejemplo de texto</strong> de un Controlador que muestra una lista de usuarios:</p>

            <pre class="code-example">
&lt;?php
namespace App\Http\Controllers;

use App\Models\Usuario; // &lt;-- 1. Importa el Modelo (la "Cocina")
use Illuminate\Http\Request; // Para manejar la petición HTTP

class UsuarioController extends Controller
{
    /**
     * Muestra una lista de todos los usuarios.
     */
    public function index()
    {
        // 2. El Controlador (camarero) pide datos al Modelo (cocina)
        $todos_los_usuarios = Usuario::all();

        // 3. El Controlador carga la Vista (la "Mesa") y le pasa los datos
        return view('usuarios.lista', [
            'usuarios' => $todos_los_usuarios // Pasamos la lista a la vista
        ]);
    }

    /**
     * Guarda un nuevo usuario en la base de datos.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:8',
        ]);

        // Crear y guardar el usuario usando el Modelo
        Usuario::create($request->all());

        return redirect()->route('usuarios.index');
    }
}
            </pre>
            </section>

        <section id="ventajas" class="mb-5">
            <h2 class="section-title">Ventajas del Patrón MVC</h2>
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5 class="mb-1">Separación de Intereses</h5>
                            <p class="mb-0">Cada componente tiene una responsabilidad clara, código más limpio.</p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="mb-1">Reutilización de Código</h5>
                            <p class="mb-0">Los Modelos y Controladores pueden ser reutilizados.</p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="mb-1">Facilidad de Mantenimiento</h5>
                            <p class="mb-0">Cambios en la Vista no afectan la lógica de negocio (Modelo/Controlador).</p>
                        </li>
                        <li class="list-group-item">
                            <h5 class="mb-1">Desarrollo Colaborativo</h5>
                            <p class="mb-0">Diferentes desarrolladores pueden trabajar en distintas capas a la vez.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="footer">
            <p>&copy; 2024 Grupo 4 (Ana y Piriz). Tutorial creado para la cátedra de Programación Web.</p>
        </div>

    </div>

    <button onclick="topFunction()" id="btnToTop" class="btn btn-primary btn-back-to-top" title="Volver arriba">
        &uarr;
    </button>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        // Funcionalidad del botón "Volver arriba"
        let mybutton = document.getElementById("btnToTop");

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0; // Para Safari
            document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
        }
    </script>
</body>
</html>