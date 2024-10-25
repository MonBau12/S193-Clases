<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ControladorVistas extends Controller
{

    /*usamos este controlador para administrar la logica de las vistas*/
    
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }
public function procesarClientes(validadorCliente $peticion)
    {
          //return 'Si llego la info del cliente :)';

        //mostramos todo lo que trae la peticion
        //return $peticion->all();
        //return $peticion->path();
        //return $peticion->url();
        //return $peticion->ip();
        //return redirect('/'); //Redirecciona al inicio
        //return redirect()->route('rutaClientes'); //Redirecciona a la ruta clientes
        //return back();

        //$id= [['usuario'=>1],['usuario'=>2]];
        //return view('form',compact('id'));
        
        $validacion= $peticion->validate([
            'txtnombre'=> 'required|min:4|max:20',
            'txtapellidos'=> 'required',
            'txtcorreo'=> 'required',
            'txttelefono'=> 'required|numeric',
        ]);
       
        //redireccion con un mensaje flashb
        $usuario= $peticion->input('txtNombre');
        
        session()->flash('exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaform');
    



    }
}
