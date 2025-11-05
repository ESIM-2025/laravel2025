@extends('layouts.app')

@section('title', 'Policies en Laravel – Grupo 8')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">🔐 Policies en Laravel</h1>
    <p class="lead">Grupo 8 – Zarza y Forio</p>

    <h2>¿Qué es una Policy?</h2>
    <p>
        Las <strong>Policies</strong> en Laravel son clases que organizan la lógica de <em>autorización</em>.
        Permiten definir reglas como: <em>¿puede este usuario editar este post?</em> o <em>¿puede eliminar este comentario?</em>
    </p>

    <h2>¿Por qué usar Policies?</h2>
    <ul>
        <li>Centralizan la lógica de permisos.</li>
        <li>Evitan mezclar reglas de autorización con lógica de negocio.</li>
        <li>Se integran fácilmente con controladores y vistas.</li>
    </ul>

    <h2>Ejemplo paso a paso</h2>

    <h3>1. Crear una Policy</h3>
    <p>Si tenemos un modelo <code>Post</code>, generamos su Policy así:</p>
    <pre><code>php artisan make:policy PostPolicy --model=Post</code></pre>

    <h3>2. Definir una regla de autorización</h3>
    <p>En <code>app/Policies/PostPolicy.php</code>:</p>
    <pre><code>public function update(User $user, Post $post)
{
    return $user->id === $post->user_id;
}</code></pre>
    <p>Esto permite que solo el dueño del post pueda editarlo.</p>

    <h3>3. Registrar la Policy</h3>
    <p>En <code>app/Providers/AuthServiceProvider.php</code>:</p>
    <pre><code>protected $policies = [
    Post::class => PostPolicy::class,
];</code></pre>

    <h3>4. Usarla en un controlador</h3>
    <pre><code>public function edit(Post $post)
{
    $this->authorize('update', $post);
    return view('posts.edit', compact('post'));
}</code></pre>

    <h3>5. Usarla en una vista</h3>
    <pre><code>@can('update', $post)
    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Editar</a>
@endcan</code></pre>

    <div class="alert alert-info mt-4">
        <strong>💡 Consejo:</strong> Las Policies solo funcionan con usuarios autenticados. Laravel las ignora si no hay sesión activa.
    </div>

    <h2>Conclusión</h2>
    <p>
        Las Policies son una herramienta esencial para construir aplicaciones seguras y mantenibles en Laravel.
        Separan claramente <em>quién puede hacer qué</em>, facilitando pruebas y futuras modificaciones.
    </p>
</div>
@endsection