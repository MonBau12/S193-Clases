@extends('layouts.plantilla')

@section('titulo','Clientes')

@section('contenido')

@session('Exito')
    <script>
        Swal.fire({
        title: "Respuesta del Servidor!",
        text: '{{$value}}',
        icon: "success"
        });
    </script>
@endsession
  <div class="container mt-5 col-md-8">

    @foreach($consultaClientes as $cliente)
      
    <div class="card text-justify font-monospace mt-4">
      <div class="card-header fs-5 text-primary">
        {{$cliente->nombre}}
      </div>
      <div class="card-body">
        <h5 class="fw-bold">{{$cliente->correo}}</h5>
        <p class="card-text fw-lighter">{{$cliente->telefono}}</p>
      </div>
      <div class="card-footer text-muted">
          <a href="{{route('FormEditEnviar',[$cliente->id])}}" class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>
      <form action="{{route('FormEliminar',[$cliente->id])}}" 
      method="POST" 
      id="Eliminar_cliente_{{$cliente->id}}" 
      class="my-2">
      @csrf
      <button type="button" class="btn btn-danger btn-sm" onclick='confirmarEliminacion({{$cliente->id}})'>
      {{__('Eliminar')}}
    </button>
    </form>
        </div>
      </div>
              
  @endforeach
</div>
<script>
function confirmarEliminacion(clienteId) {
    Swal.fire({
        title: '¿Seguro que desea eliminar el registro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Sí, eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`Eliminar_cliente_${clienteId}`).submit(); 
        }
    });
}

</script>
@endsection