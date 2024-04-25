{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','SOPORTE4.0')
@section('header')
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="http://localhost/Modulos/modulos/public/inventario">Index</a>
    </nav>
@endsection

@section('main')
    
    <h1>CATEGORIAS</h1>
    <div class="container-navbar">
            <form action="" method="POST" >
                @csrf   
                <div class="col">
                    <label for="" class="form-label">Tipo Categoria:</label>
                    <input type="text" class="form-control" name="" id="" aria-describedby="descripcionHelp" required>
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
                    <th colspan="3"><h3>Lista de categorias</h3></th>
                </tr>
                <tr>
                    <th colspan="3"><button type="submit" class="btn-buscar"><a class="nav-link" href="http://localhost/Modulos/modulos/public/inventario/categoria/create">Crear</a></button>
                </tr>
                <tr class="table_encabezado">
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->Nombre}}</td>
                    <td>{{$categoria->Descripción}}</td>
                    <td>
                        <button type="submit" class="n">
                            <a href="{{route('categoria.edit', $categoria)}}" class="btn btn-primary btn-sm">Editar</a>
                        </button>
                        <button type="submit" class="n"><a href="{{ route('categoria.destroy', $categoria->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $categoria->id }}').submit();">
                            Eliminar
                        </a></button>
                        <form id="delete-form-{{ $categoria->id }}" action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display: none;">
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