<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::paginate(10);
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('crearpaciente');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|ends_with:@upq.edu.mx|max:255',
            'telefono' => 'required|string|max:15',
            'carrera' => 'required|string|max:255',
        ]);

        Paciente::create($request->only(['nombre', 'email', 'telefono', 'carrera']));

        return redirect()->route('pacientes')->with('success', 'Paciente guardado con éxito.');
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|ends_with:@upq.edu.mx|max:255',
            'telefono' => 'required|string|max:15',
            'carrera' => 'required|string|max:255',
        ]);

        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->only(['nombre', 'email', 'telefono', 'carrera']));

        return redirect()->route('pacientes')->with('success', 'Paciente actualizado con éxito.');
    }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return redirect()->route('pacientes')->with('success', 'Paciente eliminado con éxito.');
    }
}

