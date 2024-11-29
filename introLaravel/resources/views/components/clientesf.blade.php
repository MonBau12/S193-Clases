@extends('layouts.plantilla1')

@section('titulo', 'Formulario Clientes')

@section('contenido')
<div class="container mt-5 col-md-6">

    @if(session('exito'))
        <div class="alert alert-success">{{ session('exito') }}</div>
    @endif

    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            {{ $cliente ? 'Editar Cliente' : 'Registro de Clientes' }}
        </div>

        <div class="card-body text-justify">
            <form class="mb-3" action="{{ $cliente ? route('clientesf', $cliente->id) : route('clientesf') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre', $cliente->nombre ?? '') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="txtapellidos" value="{{ old('txtapellidos', $cliente->apellidos ?? '') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtapellidos') }}</small>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="txtcorreo" value="{{ old('txtcorreo', $cliente->correo ?? '') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono', $cliente->telefono ?? '') }}">
                    <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                </div>

                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">{{ $cliente ? 'Actualizar Cliente' : 'Guardar Cliente' }}</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-5">
        <h3>Lista de Clientes</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $c)
                    <tr>
                        <td>{{ $c->nombre }}</td>
                        <td>{{ $c->apellidos }}</td>
                        <td>{{ $c->correo }}</td>
                        <td>{{ $c->telefono }}</td>
                        <td>
                            <a href="{{ route('clientesf', $c->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('clientesf', $c->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar este cliente?');">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection