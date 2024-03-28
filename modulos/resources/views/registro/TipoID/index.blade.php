{{-- Ruta del layout --}}
@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','SOPORTE4.0')
@section('content')
    <h1>INDEX TIPO IDENTIFICACIÓN</h1>
    <ul>
        <li><a href="http://localhost/Modulos/modulos/public/registro/TipoID">Index</a></li>
        <li><a href="create.blade.php">Crear</a></li>
        <li><a href="store.blade.php">Guardar</a></li>
        <li><a href="show.blade.php">Mostrar</a></li>
        <li><a href="edit.blade.php">Editar</a></li>
        <li><a href="update.blade.php">Actualizar</a></li>
        <li><a href="eliminar.blade.php">Eliminar</a></li>
    </ul>
    
@endsection
@section('footer')
    <h4>SOLUCIONES TECNOLÓGICAS</h4>
@endsection