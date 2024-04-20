{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','Home Módulos')
@section('content')
    <h1>INDEX DE REGISTRO</h1>
    <ul>
        <li><a href="">Usuarios</a></li>
        <li><a href="http://localhost/Modulos/modulos/public/registro/TipoID">Tipos de identificación</a></li>
        <li><a href="">Roles</a></li>
        <li><a href="">Medios de pago</a></li>
        <li><a href="">Estado</a></li>
        <li><a href="">Modulo</a></li>
        <li><a href="">Asignar modulo</a></li>
        <li><a href="">Pasarela de pago</a></li>
        <li><a href="">Permisos</a></li>
        <li><a href="">Asignar permisos</a></li>
    </ul>
@endsection
@section('footer')
    <h4>SOLUCIÓN DE TECNOLOGÍAS INFORMÁTICAS</h4>
@endsection