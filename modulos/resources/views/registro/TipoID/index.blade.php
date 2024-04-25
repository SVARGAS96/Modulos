{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','SOPORTE4.0')
@section('header')
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="http://localhost/Modulos/modulos/public/registro">Registro</a>
    </nav>
@endsection
@section('main')
    <h1>TIPOS DE IDENTIFICACIÓN</h1>
    <div class="container-navbar">
            <form action="" method="POST" >
                @csrf   
                <div class="col">
                    <label for="tipo_id" class="form-label">Tipo Identidicación:</label>
                    <input type="text" class="form-control" name="Tipo_Id" id="tipo_id" aria-describedby="descripcionHelp" required>
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form> 
    </div>
@endsection

@section('content')  
    
    <div class="container">
        <table class="table table-tiposId">
            <thead>
                <tr>
                    <th colspan="3"><h3>Lista de Tipos de ID</h3></th>
                </tr>
                <tr>
                    <th colspan="3"><button type="submit" class="btn-buscar"><a class="nav-link" href="http://localhost/Modulos/modulos/public/registro/TipoID/create">Crear</a></button></th>
                </tr>
                <tr class="table_encabezado">
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipos_id as $tipo_id)
                <tr>
                    <td>{{$tipo_id->Nombre}}</td>
                    <td>{{$tipo_id->Descripcion}}</td>
                    <td>

                        <button type="submit" class="btn btn-primary"><a href="{{route('tipoId.edit', $tipo_id)}}" class="btn btn-primary btn-sm">Editar</a></button>
                        
                        <button type="submit" class="n"><a href="{{ route('tipoId.edit', $tipo_id->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $tipo_id->id }}').submit();">
                            Eliminar
                        </a></button>
                        <form id="delete-form-{{ $tipo_id->id }}" action="{{ route('tipoId.destroy', $tipo_id->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('footer')
    <h4>SOLUCIONES TECNOLÓGICAS</h4>
@endsection