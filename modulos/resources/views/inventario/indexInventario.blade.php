{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','Home Módulos')
@section('content')
    <h1>INVENTARIOS</h1>
    <ul>
        <li><a href="http://localhost/Modulos/modulos/public/inventario/categoria">Categoria</a></li>
        <li><a href="">Producto</a></li>
 
    </ul>
@endsection
@section('footer')
    <h4>SOLUCIÓN DE TECNOLOGÍAS INFORMÁTICAS</h4>
@endsection