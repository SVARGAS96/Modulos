@extends('layouts.plantilla_home')
{{-- Selecciona la seccion y se ingresa la informacion. --}}
@section('title','Soporte4.0')
@section('content')
    <h1>ELIMINAR CATEGORÍA</h1>
    <ul>
        <li>Index</li>
        <li>Crear</li>
        <li>Guardar</li>
        <li>Mostrar</li>
        <li>Editar</li>
        <li>Actualizar</li>
        <li>Eliminar</li>
    </ul>
@endsection
@section('footer')
    <h4>CATEGORÍA</h4>
@endsection

Route::controller(ProductoController::class)->group(function(){
    route::get('productos','index');//index = recurso del controlador.-> Muestra todo
    route::get('productos/create','create');//create = recurso del controlador. -> Crear muestr formulario
    route::get('productos/show/{registro}','show');//Show = buscar uno
    route::get('productos/edit/{registro}','edit');//editar uno muestra formulario    
});
