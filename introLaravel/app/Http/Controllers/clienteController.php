<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * aqui se mete el insert.
     */
    public function store(Request $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=> Carbon::now(),
            "update_at"=> Carbon::now(),
        ]);
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
        $cliente = DB::table('clientes')->where('id', $id)->first();
        $clientes = DB::table('clientes')->get();
    
        return view('clientesf', compact('cliente', 'clientes'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'txtnombre' => 'required|string|max:150',
            'txtapellidos' => 'required|string|max:150',
            'txtcorreo' => 'required|email|max:150',
            'txttelefono' => 'nullable|string|max:10',
        ]);
    
        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $validated['txtnombre'],
            'apellidos' => $validated['txtapellidos'],
            'correo' => $validated['txtcorreo'],
            'telefono' => $validated['txttelefono'],
            'updated_at' => now(),
        ]);
    
        return redirect()->route('clientesf')->with('exito', 'Cliente actualizado correctamente.');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();

    return redirect()->route('clientesf.edit', 1)->with('exito', 'Cliente eliminado correctamente.');
    }
}
