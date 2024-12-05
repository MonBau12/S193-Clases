<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorCliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class clienteController extends Controller
{
    /**
     * Aqui va la consulta del CRUD.
     */
    public function index()
    {
        $consultaClientes = DB::table('clientes')->get();
        return view('clientes',compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Insert.
     */
    public function store(ValidadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        $usuario = $request->input('txtnombre');
        session()->flash('Exito','Se guardo el usuario: '.$usuario);
        return to_route('rutaForm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $registro = DB::select('select * from clientes where id ='.$id.'');
        return view('edicion',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidadorCliente $request, string $id)
    {
        DB::table('clientes')->whereId($id)->update([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
        ]);
        $usuario = $request->input('txtnombre');
        session()->flash('Exito','Se edito el usuario: '.$usuario);
        return to_route('rutaClientes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = DB::select('select nombre from clientes where id ='.$id.'');
        $nombre = $registro[0]->nombre;
        DB::table('clientes')->delete($id);
        session()->flash('Exito','Se elimino al usuario: '.$nombre);
        return to_route('rutaClientes');
    }
}
