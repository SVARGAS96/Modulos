{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','SOPORTE4.0')
@section('header')
    <h1>CATEGORIAS</h1>
    <a class="nav-link active" aria-current="page" href="http://localhost/Modulos/modulos/public/inventario/categoria">Index</a>
    <nav class="navbar">
        <div class="container-navbar">
            <a class="nav-link" href="http://localhost/Modulos/modulos/public/inventario/categoria/crear">Crear</a> 
        </div>
    </nav>
@endsection
@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><h3>Lista de categorias</h3></th>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria_id)
                <tr>
                    <td>{{$categoria_id->Nombre}}</td>
                    <td>{{$categoria_id->Descripcion}}</td>
                    <td>
                        <a href="{{route('categoria.edit', $categoria_id)}}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{route('categoria.destroy', $categoria_id)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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