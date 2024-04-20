{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','Soporte4.0')
@section('content')
    <h1>PRODUCTOS</h1>
    <ul>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/producto">Index</a></li></li>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/producto/crear">Crear</a></li></li>
        <li><li><a href="ihttp://localhost/Modulos/modulos/public/inventario/producto/mostrar/1">Mostrar</a></li></li>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/producto/editar/1">Editar</a></li></li>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/producto/guardar">Guardar</a></li></li>
        <li><li><a href="http://localhost/Modulos/modulos/public/inventario/producto/eliminar/1">Actualizar</a></li></li>
        <li><li><a href="index.blade.php">Eliminar</a></li></li>
    </ul>
@endsection
@section('footer')
    <h4>PRODUCTO</h4>
@endsection
