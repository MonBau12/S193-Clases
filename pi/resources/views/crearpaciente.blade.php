@extends('layouts.app')

@section('contenido')
<div class="container mt-5">
    <h2 class="text-center">Agregar Nuevo Paciente</h2>

    <form action="{{ route('pacientes.store') }}" method="POST">
        @csrf <!-- Protección contra ataques CSRF -->
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
        </div>

        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera</label>
            <select class="form-select" id="carrera" name="carrera" required>
                <option value="" disabled selected>Seleccione una carrera</option>
                <option value="Ingeniería">Ingeniería en sistemas </option>
                <option value="Psicología">Ingeneria en redes</option>
                <option value="Derecho">Ingeneria en Automotriz</option>
                <option value="Administración">Ingeneria en mecatronica</option>
                +
            </select>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Guardar Paciente</button>
            <a href="{{ route('pacientes') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
