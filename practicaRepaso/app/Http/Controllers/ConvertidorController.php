<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertidorController extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function repaso1(){
        return view('repaso1');
    }
    public function convertir(Request $request)
    {
        $valor = $request->input('valor');
        $unidad = $request->input('unidad');

        if ($unidad == 'MBtoGB') {
            $resultado = $valor / 1024;
        } elseif ($unidad == 'GBtoMB') {
            $resultado = $valor * 1024;
        } elseif ($unidad == 'GBtoTB') {
            $resultado = $valor / 1024;
        } elseif ($unidad == 'TBtoGB') {
            $resultado = $valor * 1024;
        } else {
            return response()->json('Unidad no válida', 400);
        }
        

        return response()->json("El resultado de la conversión es: $resultado");
    }
}