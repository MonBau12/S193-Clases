@extends('layouts.app')

@section('contenido')
    <!-- Sección Hero -->
    <div class="hero">
        <div class="hero-content">
            <h1 class="text-black">Bienvenido a Nuestra Clínica</h1>
            <p class="text-black">Tu bienestar mental es nuestra prioridad</p>
            <a href="#contacto" class="btn btn-primary">Contáctanos</a>
        </div>
    </div>

    <!-- Servicios -->
    <div class="container mt-5">
        <h2 class="text-center">Nuestros Servicios</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Terapia Individual</h5>
                        <p class="card-text">Ofrecemos sesiones personalizadas para abordar tus necesidades emocionales y psicológicas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Terapia de Pareja</h5>
                        <p class="card-text">Mejoramos la comunicación y la conexión entre parejas a través de terapias efectivas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Terapia Familiar</h5>
                        <p class="card-text">Facilitamos la comprensión y la armonía familiar a través de la terapia grupal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario de Contacto -->
    <div id="contacto" class="container mt-5">
        <h2 class="text-center">Contáctanos</h2>
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Tu correo" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="3" placeholder="Tu mensaje" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
