{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','Soporte4.0')
@section('content')
    <h1>CATEGORÍA DE PRODUCTOS</h1>
    <ul>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/categoria">Index</a></li></li>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/categoria/crear">Crear</a></li></li>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/categoria/guardar">Guardar</a></li></li>
        <li><li><a href="ihttp://localhost/Modulos/modulos/public/inventario/categoria/mostrar/1">Mostrar</a></li></li>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/categoria/editar/1">Editar</a></li></li>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/categoria/actualizar/1">Actualizar</a></li></li>
        <li><li><a href="index.blade.php">Eliminar</a></li></li>
    </ul>
@endsection
@section('footer')
    <h4>CATEGORÍA</h4>
@endsection