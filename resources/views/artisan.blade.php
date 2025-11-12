<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Laravel Artisan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    :root { --w:60ch; }
    html,body{height:100%}
    body{
      margin:0; background:#000; color:#fff; font-family:Georgia,serif;
      display:flex; flex-direction:column; align-items:center; justify-content:center; gap:18px;
      text-align:center; padding:24px;
    }
    h1{font-size:clamp(32px,6vw,72px); font-style:italic; font-weight:400; margin:0}
    .sub{opacity:.85; font-size:clamp(14px,2vw,18px); margin-top:-6px}
    .mini{opacity:.9; font-size:clamp(14px,2vw,18px); margin-top:6px}
    p{max-width:var(--w); font-size:clamp(16px,2.2vw,20px); line-height:1.6; margin:0}
    pre{
      width:min(90vw, var(--w)); margin:8px 0 0; padding:18px 20px; text-align:left;
      background:rgba(255,255,255,.06); border-radius:12px; font:14px/1.5 ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", monospace;
      overflow:auto;
    }
    .hint{opacity:.7; font-size:12px; letter-spacing:.06em}
  </style>
</head>
<body>
  <h1>Laravel Artisan</h1>
  <div class="sub">¿Qué es?</div>
  <p>Artisan es la CLI de Laravel. Con unos pocos comandos generás controladores, modelos y migraciones, corrés el servidor local y listás rutas.</p>
  <div class="mini">Comandos básicos</div>
  <pre>php artisan serve
php artisan make:controller UsuarioController
php artisan make:model Producto -m
php artisan migrate
php artisan route:list</pre>
  <div class="hint">Abrí /artisan en tu navegador</div>
</body>
</html>
