@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-8">
    <div class="card p-4 mb-4">
      <h5>Archivos públicos</h5>
      <p class="small text-muted">storage/app/public - accesibles tras <code>php artisan storage:link</code>.</p>
      <ul class="list-group">
        @forelse($publicFiles as $file)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>{{ $file }}</div>
            <div>
              <a class="btn btn-sm btn-outline-primary" href="{{ route('storage.show',['disk'=>'public','path'=>$file]) }}">Ver</a>
              <form method="POST" action="{{ route('storage.destroy') }}" style="display:inline-block">
                @csrf @method('DELETE')
                <input type="hidden" name="disk" value="public">
                <input type="hidden" name="path" value="{{ $file }}">
                <button class="btn btn-sm btn-outline-danger">Borrar</button>
              </form>
            </div>
          </li>
        @empty
          <li class="list-group-item">No hay archivos públicos.</li>
        @endforelse
      </ul>
      
    </div>
    <a href="{{ url('/storage-info') }}" class="btn">Ver información sobre Storage</a>


    <div class="card p-4">
      <h5>Archivos privados</h5>
      <p class="small text-muted">storage/app - solo accesibles desde backend.</p>
      <ul class="list-group">
        @forelse($privateFiles as $file)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>{{ $file }}</div>
            <div>
              <a class="btn btn-sm btn-outline-primary" href="{{ route('storage.show',['disk'=>'local','path'=>$file]) }}">Abrir</a>
              <form method="POST" action="{{ route('storage.destroy') }}" style="display:inline-block">
                @csrf @method('DELETE')
                <input type="hidden" name="disk" value="local">
                <input type="hidden" name="path" value="{{ $file }}">
                <button class="btn btn-sm btn-outline-danger">Borrar</button>
              </form>
            </div>
          </li>
        @empty
          <li class="list-group-item">No hay archivos privados.</li>
        @endforelse
      </ul>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="card p-3 mb-3">
      <h6>Comandos útiles</h6>
      <pre class="small mb-0">php artisan storage:link
Storage::put(...)
Storage::disk('public')->url($path)
Storage::disk('s3')->temporaryUrl(...)</pre>
    </div>
    <div class="card p-3">
      <h6>Configuración</h6>
      <p class="small mb-0">Edita <code>config/filesystems.php</code> y .env para S3 o FTP.</p>
    </div>
  </div>
</div>
@endsection
