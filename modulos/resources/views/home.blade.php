{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','Home Módulos')
@section('content')
    <h1>HOME MÓDULOS SOPORTE4.0</h1>
    <a href="http://localhost/Modulos/modulos/public/registro">USUARIOS</a>
    <br>
    <a href="http://localhost/Modulos/modulos/public/inventario">INVENTARIO</a>
@endsection
@section('footer')
    <h4>SOLUCIONES TECNÓLOGICAS</h4>
@endsection