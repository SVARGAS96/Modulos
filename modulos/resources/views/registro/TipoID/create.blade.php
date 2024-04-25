@extends('layouts.plantilla_create')
@section('title','SOPORTE4.0')
@section('header')
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="http://localhost/Modulos/modulos/public/registro">Registro</a>
    </nav>
@endsection

@section('main')
    <h1>CREAR TIPO DE DOCUMENTO</h1>
@endsection
@section('content')
    <div class="container">
        <div class="col-12">
            <div class="card border-primary">
                <div class="card-header">
                    <h3 class="text-center">Ingresar tipo de documento</h3>
                </div>
                <div class="card-body">
                    <table>
                        <form action="{{ route('tipoId.store') }}" method="POST" class="form-create">
                        @csrf
                            <div class="col-1">
                                <tr>
                                    <th>
                                        <label for="name" class="form-label">Nombre:</label>
                                    </th>
                                    <th>
                                        <input type="text" class="form-control" name="Nombre" id="name" aria-describedby="nameHelp" required>
                                    </th>
                                </tr>
                            </div>
                            <div class="col-1">
                                <tr>
                                    <th>
                                        <label for="descripcion" class="form-label">Descripción:</label>
                                    </th>
                                    <th>
                                    <input type="text" class="form-control" name="Descripcion" id="descripcion" aria-describedby="descripcionHelp" required>
                                    </th>
                                </tr>
                            </div>
                            <div class="col">
                                <tr>
                                    <th class="btn-guardar">
                                        <button type="submit" >Guardar</button>
                                    </th>
                                </tr>
                                <tr>   
                                    <th class="btn-guardar">
                                        <button type="submit" class="regresar"><a href="{{ route('tipoId.index') }}" class="btn btn-info">Regresar</a></button>
                                    </th>
                                </tr>
                            </div>
                            <div class="card-footer bg-primary text-white">
                                <tr>
                                    
                                </tr>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer')
  <h4>SOLUCIONES TECNOLÓGICAS</h4>
@endsection