<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Inicio</title>
</head>
<body>
    <div class="overlay"></div>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height content">
        <h1 class="display-1">¡Paola Montserrat Bautista Sandoval!</h1>
        <h1 class="display-1">Grupo: S193</h1>
        <h1 class="display-1">Materia: Programacion</h1>
        <a href="{{route('rutarepaso')}}" class="btn btn-warning">Repaso1</a>
    </div>
</body>
</html>
