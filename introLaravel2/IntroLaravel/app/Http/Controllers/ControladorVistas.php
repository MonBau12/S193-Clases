<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    /* Usamos este controlador para administrar la logica de las vistas */
    public function home(){
        return view('inicio');
    }
    
    public function consulta(){
        
    }
    // public function ProcesarCliente(Request $peticion){
    //     // return 'Si llego los datos del cliente :)'
    //     // return $peticion ->path(); ruta
    //     // return $peticion ->url(); url
    //     return $peticion ->ip(); 
    //     // return $peticion ->all();
    // }
   /*  public function ProcesarCliente(ValidadorCliente $peticion){
        //Redireccion usando l ruta
        // return redirect('/'); 
        //Redireccion usando el nombre de la ruta
        // return redirect()->route('rutaClientes');
        //Redireccion al origen de la peticion
        // return back();
        //Redireccion con variable adjunta
        // $id=[['usuario'=>1],['usuario'=>2]];

        // return view('formulario',compact('id'));

        //Redireccion con un mensaje flash en session



        $usuario = $peticion->input('txtnombre');
        session()->flash('Exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaForm');
    } */

    
}
