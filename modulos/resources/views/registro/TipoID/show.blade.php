@extends('layouts.plantilla_show')
@section('title','SOPORTE4.0')
@section('content')
    <h1>MOSTRAR TIPO IDENTIFICACIÓN</h1>
    <h1>Detalles del Tipo de ID</h1>
    <p><strong>ID:</strong> {{ $tipoId->id }}</p>
    <p><strong>Nombre:</strong> {{ $tipoId->Nombre }}</p>
    <p><strong>Descripción:</strong> {{ $tipoId->Descripcion }}</p>

@endsection
@section('footer')
  <h4>SOLUCIONES TECNOLÓGICAS</h4>
@endsection