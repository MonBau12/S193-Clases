@extends('layouts.plantilla')
@section('title', 'Registro de Libro')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('principal')}}">{{__('')}}Página principal</a>
    </nav>
    <div class="container mt-5 col-md-6">
    @session('exito')
        {!<script>
            Swal.fire({
                title: "Todo correcto!",
                text: "Las Cronicas de Narnia El Viajero del Alba!",
                text: "Libro guardado",
                icon: "success"});
           </script>!}
        @endsession
        <div class="card font-monospace p-4">
            <div class="card-header text-center">
                <h4>Registro de Libro</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('confirmacionregistro') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" required>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" required>
                    </div>
                    <div class="mb-3">
                        <label for="paginas" class="form-label">Páginas</label>
                        <input type="number" class="form-control" id="paginas" name="paginas" placeholder="Páginas" required>
                    </div>
                    <div class="mb-3">
                        <label for="año" class="form-label">Año</label>
                        <input type="number" class="form-control" id="año" name="año" placeholder="Año" required>
                    </div>
                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_editorial" class="form-label">Email de Editorial</label>
                        <input type="email" class="form-control" id="email_editorial" name="email_editorial" placeholder="Email de Editorial" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Guardar Libro</button>
                </form>
            </div>
        </div>
      
    </div>
@endsection
