@extends('layouts.plantilla_create')
@section('title','SOPORTE4.0')
@section('content')
    <h1>CREAR CATEGORIA</h1>
    <h3>Formulario para crear categoria<h3>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center">Ingresar nueva categoria</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('categoria.store') }}" method="POST">
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="Nombre" id="name" aria-describedby="nameHelp" required>
                        </div>
                        <div class="col-12">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <input type="text" class="form-control" name="Descripcion" id="descripcion" aria-describedby="descripcionHelp" required>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>

                </div>
                <div class="card-footer bg-primary text-white">
                    <a href="{{ route('categoria.index') }}" class="btn btn-info">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer')
  <h4>SOLUCIONES TECNOLÓGICAS</h4>
@endsection