<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index() {
        return view('principal');
    }
    
    public function create() {
        return view('registro');
    }
    
    public function store(Request $request) {
        $validatedData = $request->validate([
            'isbn' => 'required|numeric|min:13',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string|max:100',
            'paginas' => 'required|integer|min:1',
            'año' => 'required|integer|between:1000,' . date('Y'),
            'editorial' => 'required|string|max:100',
            'email_editorial' => 'required|email'
        ]);
    

    
        
        return redirect()->route('principal');
    }
    
}


