<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertidorController extends Controller
{
    public function convertir(Request $request)
    {
        $valor = $request->input('valor');
        $unidad = $request->input('unidad');

        switch ($unidad) {
            case 'MBtoGB':
                $resultado = $valor / 1024;
                break;
            case 'GBtoMB':
                $resultado = $valor * 1024;
                break;
            case 'GBtoTB':
                $resultado = $valor / 1024;
                break;
            case 'TBtoGB':
                $resultado = $valor * 1024;
                break;
            default:
                return response()->json('Unidad no válida', 400);
        }

        return response()->json("El resultado de la conversión es: $resultado");
    }
}


