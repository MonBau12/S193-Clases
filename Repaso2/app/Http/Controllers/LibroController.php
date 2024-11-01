<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class LibroController extends Controller
{
    public function principal() {
        return view('principal');
    }
    
    public function registro() {
        return view('registro');
    }

    public function confirmacionregistro(validadorLibro $peticion) {
        
        $libro = $peticion ->input('txttitulo');

        session()->flash ('exito','Todo correcto: Libro"' .$libro.'"guardado');

        return to_route('libroscreate');


    }
}


