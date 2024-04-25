@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','Soporte4.0')
@section('content')
    <h1>CREAR PRODUCTO</h1>
    <ul>
        <li>Index</li>
        <li>Crear</li>
        <li>Mostrar</li>
        <li>Actualizar</li>
        <li>Guardar</li>
        <li>Eliminar</li>
    </ul>
    <form action="/productos" method="POST">
        @csrf 
        <label for="nombre">Nombre del producto:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
       
        <label for="descripcion">Descripción del producto:</label><br>
        <textarea id="descripcion" name="descripcion"></textarea><br>
       
        <label for="precio">Precio:</label><br>
        <input type="text" id="precio" name="precio"><br>

        <label for="unid">Unid:</label><br>
        <input type="text" id="unid" name="unid"><br>
       
        <button type="submit">Crear Producto</button>
    </form>
@endsection
@section('footer')
    <h4>PRODUCTO</h4>
@endsection