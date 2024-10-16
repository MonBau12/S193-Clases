@extends('layouts.plantilla1')

@section('titulo','Clientes')

@section('contenido')

    {{-- Inicia Tarjeta Cliente --}}
    <div class="container mt-5 col-md-8">

        <div class="card text- justify font-monospace">

            <div class="card-header fs-5 text-center text-primary">
               Paola Montserrat Bautista Sandoval
            </div>

            <div class="card-body">
              <h5 class="fw-bold"> montse.bau.sandoval@gmail.com </h5>
              <h5 class="fw-medium"> 4428792294 </h5>
              <p class="card-text fw-lighter"></p>


            </div>

            <div class="card-footer text-muted">
              <button type="submit" class="btn btn-warning btn-sm"> Actualizar </button>
              <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>

            </div>

            {{-- finaliza trajeta cliente --}}
          </div>
@endsection