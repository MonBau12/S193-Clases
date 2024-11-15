@extends('layouts.plantilla1')


@section('titulo','componentes blade')

@section('contenido')

<x-card Encabezado="Componente" titulo="Dinamico" textoBoton="Guardar">
    Este es el primero
</x-card>
<x-card Encabezado="Componente 2" titulo="Dinamico 2" textoBoton="No Guardar">
    Otro gato!!!
</x-card>

<div class="conteiner mt-4">
    <x-Alert tipo="danger">Rojo</x-Alert>
    <x-Alert tipo="warning">Amarillo</x-Alert>
     
</div>
@endsection

