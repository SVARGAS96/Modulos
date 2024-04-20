@extends('layouts.plantilla_edit')
@section('title','SOPORTE4.0')
@section('content')
    <h1>EDITAR TIPO IDENTIFICACIÓN</h1>
    <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-12">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="Nombre" id="name" value="{{ $categoria->Nombre }}" required>
        </div>
        <div class="col-12">
            <label for="descripcion" class="form-label">Descripción:</label>
            <input type="text" class="form-control" name="Descripcion" id="descripcion" value="{{ $categoria->Descripcion }}" required>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <button type="submit"><a href="{{ route('categoria.index') }}" class="btn btn-info">Regresar</a></button>
        </div>
        
    </form>

@endsection
@section('footer')
  <h4>SOLUCIONES TECNOLÓGICAS</h4>
@endsection