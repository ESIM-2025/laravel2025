@extends('layouts.app')

@section('content')
<div class="card p-4">
  <h5>Subir archivo</h5>
  <form action="{{ route('storage.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Archivo</label>
      <input type="file" name="file" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Tipo</label>
      <select name="type" class="form-select">
        <option value="public">Público</option>
        <option value="private">Privado</option>
      </select>
    </div>
    <button class="btn btn-success">Subir</button>
  </form>
</div>
@endsection
