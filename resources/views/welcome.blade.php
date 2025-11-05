<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relaciones entre Modelos en Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/relaciones.css') }}">
</head>
<body>
    <header>
        <h1 class="titulo">Relaciones entre Modelos en Laravel</h1>
        <p class="subtitulo">Por Olmedo Guillermo & Medina Joaquín</p>
    </header>

    <main>
        <section class="bloque animado">
            <p>En <b>Laravel</b>, las relaciones entre modelos son una característica fundamental del <b>Eloquent ORM</b>, que permite definir y trabajar con las conexiones entre diferentes tablas de la base de datos de una manera <b>intuitiva y orientada a objetos</b>.</p>
            <p>Estas relaciones se definen dentro de las clases de los modelos y representan cómo se conectan los registros de una tabla con los de otra, siguiendo las reglas de la base de datos relacional.</p>
        </section>

        <section class="bloque animado">
            <h2>¿Qué es Eloquent ORM?</h2>
            <p><b>Eloquent</b> es un sistema de mapeo objeto-relacional (ORM) que permite interactuar con la base de datos usando objetos PHP, en lugar de escribir consultas SQL directamente.</p>
            <p>Una de sus características más poderosas es la capacidad de definir y gestionar <b>relaciones entre modelos</b>, reflejando naturalmente las relaciones entre tablas de una base de datos relacional.</p>
            <p>Esto simplifica el acceso a datos relacionados, mejora la legibilidad del código y ayuda a evitar errores comunes como el <b>problema N+1</b>.</p>
        </section>

        <section class="bloque animado">
            <h2>El problema N+1</h2>
            <p>El problema N+1 ocurre cuando una consulta inicial obtiene una lista de elementos (<code>1</code>), seguida de consultas adicionales para cada elemento relacionado (<code>N</code>), sumando un total de <code>N+1</code> consultas.</p>
        </section>

        <section class="bloque animado">
            <h2>Convenciones en Laravel</h2>
            <ul>
                <li>La clave foránea se nombra con el modelo en singular seguido de <code>_id</code>. Ejemplo: <code>user_id</code>.</li>
                <li>En relaciones muchos a muchos, la tabla pivote combina los nombres de los modelos en orden alfabético y en singular (ejemplo: <code>role_user</code>).</li>
                <li>Las claves primarias se asumen como <code>id</code>.</li>
            </ul>
        </section>

        <section class="bloque animado">
            <h2>Tipos de Relaciones</h2>

            <h3>1️⃣ Uno a Uno (<code>hasOne</code> / <code>belongsTo</code>)</h3>
            <p>Un modelo está asociado con exactamente un registro en otro modelo.</p>
            <div class="consola">
                <div class="barra">
                    <div class="boton rojo"></div>
                    <div class="boton amarillo"></div>
                    <div class="boton verde"></div>
                    <span class="titulo-consola">app/Models/User.php</span>
                </div>
<pre><code>// Relación uno a uno: un usuario tiene un perfil
public function profile()
{
    return $this->hasOne(Profile::class);
}</code></pre>
            </div>

            <h3>2️⃣ Uno a Muchos (<code>hasMany</code> / <code>belongsTo</code>)</h3>
            <p>Un modelo puede tener múltiples registros en otro modelo.</p>
            <div class="consola">
                <div class="barra">
                    <div class="boton rojo"></div>
                    <div class="boton amarillo"></div>
                    <div class="boton verde"></div>
                    <span class="titulo-consola">app/Models/User.php</span>
                </div>
<pre><code>// Relación uno a muchos: un usuario tiene muchos posts
public function posts()
{
    return $this->hasMany(Post::class);
}</code></pre>
            </div>

            <h3>3️⃣ Tiene Muchos a Través (<code>hasManyThrough</code>)</h3>
            <p>Permite acceder a un modelo relacionado a través de otro modelo intermedio.</p>
            <div class="consola">
                <div class="barra">
                    <div class="boton rojo"></div>
                    <div class="boton amarillo"></div>
                    <div class="boton verde"></div>
                    <span class="titulo-consola">app/Models/Country.php</span>
                </div>
<pre><code>// Un país tiene muchos posts a través de sus usuarios
public function posts()
{
    return $this->hasManyThrough(Post::class, User::class);
}</code></pre>
            </div>

            <h3>4️⃣ Relaciones Polimórficas</h3>
            <p>Permiten que un modelo pertenezca a más de un tipo de modelo.</p>

            <h4>Uno a Uno Polimórfico</h4>
            <div class="consola">
                <div class="barra">
                    <div class="boton rojo"></div>
                    <div class="boton amarillo"></div>
                    <div class="boton verde"></div>
                    <span class="titulo-consola">app/Models/Post.php</span>
                </div>
<pre><code>// Un post tiene una imagen (relación polimórfica uno a uno)
public function image()
{
    return $this->morphOne(Image::class, 'imageable');
}</code></pre>
            </div>

            <h4>Uno a Muchos Polimórfico</h4>
            <div class="consola">
                <div class="barra">
                    <div class="boton rojo"></div>
                    <div class="boton amarillo"></div>
                    <div class="boton verde"></div>
                    <span class="titulo-consola">app/Models/Video.php</span>
                </div>
<pre><code>// Un video tiene muchos comentarios
public function comments()
{
    return $this->morphMany(Comment::class, 'commentable');
}</code></pre>
            </div>

            <h4>Muchos a Muchos Polimórfico</h4>
            <div class="consola">
                <div class="barra">
                    <div class="boton rojo"></div>
                    <div class="boton amarillo"></div>
                    <div class="boton verde"></div>
                    <span class="titulo-consola">app/Models/Post.php</span>
                </div>
<pre><code>// Un post puede tener muchas etiquetas (relación polimórfica muchos a muchos)
public function tags()
{
    return $this->morphToMany(Tag::class, 'taggable');
}</code></pre>
            </div>
        </section>

        <section class="bloque animado">
            <h2>Carga Eficiente de Relaciones (Eager Loading)</h2>
            <p>Sin <b>eager loading</b>, se generan <b>1 consulta + N consultas</b>, lo que puede ralentizar la aplicación.</p>
            <p>Con <b>eager loading</b> se cargan las relaciones de manera anticipada, reduciendo la cantidad total de consultas.</p>
        </section>

        <a href="https://laravel.com/docs/eloquent-relationships" target="_blank" class="btn">Ver Documentación Oficial</a>
    </main>

    <script src="{{ asset('js/relaciones.js') }}"></script>
</body>
</html>
