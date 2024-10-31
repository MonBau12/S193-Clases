@extends('layouts.plantilla')
@section('title', 'Registro de Libro')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Biblioteca</a>
    </nav>
    <div class="container mt-5 col-md-6">

    <div class="card font-monospace">

        <div class="card-header fs-5 text-center text-primary">
            {{__('Registro de libros')}}
        </div>
        <div class="card-body text-justify">
            <form action="{{route('libros.create')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título del libro</label>
                <input type="text" class="form-control" id="titulo" name="titulo"
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" value=" " name="titulo"

            </div>
            </form>
        </div>
    </div>
        <form action="{{ route('libros.store') }}" method="POST">
            @csrf
            
            <input type="text" name="isbn" placeholder="ISBN" required>
            <input type="text" name="titulo" placeholder="Título" required>
            <input type="text" name="autor" placeholder="Autor" required>
            <input type="number" name="paginas" placeholder="Páginas" required>
            <input type="number" name="año" placeholder="Año" required>
            <input type="text" name="editorial" placeholder="Editorial" required>
            <input type="email" name="email_editorial" placeholder="Email de Editorial" required>
            <button type="submit">Guardar Libro</button>
        </form>
        @session('exito')
        {!<script>
            Swal.fire({
                alertify()->success("Todo correcto: Libro '{$request->titulo}' guardado");
                icon: "success"});
           </script>!}
        @endsession

    </div>
@endsection
