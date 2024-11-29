@extends('layouts.plantilla')

@section('titulo','Clientes')

@section('contenido')
  <div class="container mt-5 col-md-8">
    @foreach($consulta as $cliente)
    <div class="card text-justify font-monospace">
      <div class="card-header fs-5 text-primary">
        {{$cliente->nombre}} - {{$cliente->apellido}} 
      </div>
      <div class="card-body">
        <h5 class="fw-bold">{{$cliente->correo}} </h5>
        <p class="card-text fw-lighter">{{$cliente->telefono}} </p>
        <p class="card-text fw-lighter"></p>
      </div>
      <button type="submit" class="btn btn-warning btn-sm">{{__('Actualizar')}}</button>
      <button type="submit" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>
    </div>
    @endforeach
  </div>
  
@endsection