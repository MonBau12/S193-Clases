@extends('layouts.plantilla')
@section('title', 'Página Principal')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('libros.create')}}">{{__('Registro de Libros')}}</a>
 
    </nav>
    <div class="container">
        <h1>Noticia literaria :  Harry Potter, el pacto de un padre y un fenómeno literario que cumple 20 años e inspiró a millones de niños y adultos en todo el mundo</h1>
        <p>El 16 de mayo de 2015 hice un pacto. Era un pacto mágico, de esos en los que te juegas el alma. Era un pacto que se basaba en un libro. El libro era "Harry Potter y la piedra filosofal". Ese libro cumple hoy 20 años.

El 26 de junio de 1997, 18 años antes de mi pacto, una pequeña editorial independiente británica llamada Bloomsbury publicó un libro que otras editoriales se habían negado a publicar, de una autora que nadie conocía: Joanne Kathleen Rowling.

Esta inglesa de 42 años, separada y con una hija, vio cómo ese día salían de imprenta 500 copias tapa dura de su otro niño, Harry Potter, un huérfano de 11 años que había imaginado por primera vez en los tiempos en que trabajaba en Amnistía Internacional.</p>
   

<img src="{{asset('image\HP.jpeg')}}" alt="Logo UPQ" class="img-fluid rounded m-auto d-block p-2">
@endsection
