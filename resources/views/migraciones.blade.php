<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Migraciones en Laravel</title>
  <style>
    body {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #f9f9f9;
      font-family: "Poppins", sans-serif;
      text-align: center;
      padding: 50px;
    }
    h1 {
      font-size: 3rem;
      margin-bottom: 10px;
    }
    .card {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      padding: 40px;
      margin: 40px auto;
      max-width: 800px;
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.25);
    }
    ul {
      text-align: left;
      max-width: 600px;
      margin: 0 auto;
      list-style: none;
      padding: 0;
    }
    li {
      margin: 15px 0;
      background: rgba(255, 255, 255, 0.1);
      padding: 15px;
      border-radius: 10px;
      transition: 0.3s;
    }
    li:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.02);
    }
    code {
      background: rgba(0, 0, 0, 0.4);
      padding: 5px 10px;
      border-radius: 8px;
      color: #ffd54f;
      font-weight: bold;
    }
    .cmd-title {
      font-weight: bold;
      color: #4fc3f7;
      display: block;
      margin-bottom: 5px;
      font-size: 1.1rem;
    }
    footer {
      margin-top: 40px;
      font-size: 0.9rem;
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <h1>Migraciones en Laravel</h1>
  <p>Una forma elegante y segura de gestionar tu base de datos</p>

  <div class="card">
    <h2>📘 ¿Qué son Las Migraciones?</h2>
    <p>
      Las <strong>migraciones</strong> en Laravel son una herramienta que permite 
      gestionar la estructura de la base de datos directamente desde el código. 
      En lugar de modificar tablas manualmente en phpMyAdmin, las migraciones 
      permiten registrar cada cambio que se hace, como la creación, modificación o eliminación de tablas y columnas. 
      Esto facilita el trabajo en equipo, mantiene el control de versiones y hace posible revertir cambios si es necesario.
    </p>
  </div>

  <div class="card">
    <h2>⚙️ Comandos útiles</h2>
    <ul>
      <li>
        <span class="cmd-title">📄 Crear una nueva migración</span>
        <code>php artisan make:migration create_users_table</code><br>
        Crea un archivo donde se define la estructura de una tabla (por ejemplo, "users").
      </li>

      <li>
        <span class="cmd-title">🚀 Ejecutar migraciones</span>
        <code>php artisan migrate</code><br>
        Aplica todas las migraciones pendientes, creando o modificando las tablas en la base de datos.
      </li>

      <li>
        <span class="cmd-title">⏪ Revertir la última migración</span>
        <code>php artisan migrate:rollback</code><br>
        Deshace los últimos cambios aplicados con una migración, ideal si algo salió mal.
      </li>

      <li>
        <span class="cmd-title">🔄 Refrescar migraciones</span>
        <code>php artisan migrate:refresh</code><br>
        Revierte todas las migraciones y las ejecuta nuevamente. 
        Se usa cuando querés reiniciar la base de datos sin perder las migraciones.
      </li>

      <li>
        <span class="cmd-title">🧹 Limpiar y volver a crear</span>
        <code>php artisan migrate:fresh</code><br>
        Elimina todas las tablas y ejecuta todas las migraciones desde cero. 
        Es útil cuando querés empezar completamente de nuevo.
      </li>

      <li>
        <span class="cmd-title">📋 Ver estado de migraciones</span>
        <code>php artisan migrate:status</code><br>
        Muestra qué migraciones ya fueron ejecutadas y cuáles están pendientes.
      </li>
    </ul>
  </div>

  <div class="card">
    <h2>💡 Ventajas</h2>
    <p>
      ✅ Mantiene tu base de datos sincronizada con el código<br>
      ✅ Facilita el trabajo en equipo<br>
      ✅ Evita errores manuales en la estructura<br>
      ✅ Permite revertir o rehacer cambios fácilmente<br>
      ✅ Documenta automáticamente los cambios realizados
    </p>
  </div>

  <footer>
    Hecho con por <strong>Tiago Espínola</strong> y <strong>Dante Flores</strong>
  </footer>
</body>
</html>
