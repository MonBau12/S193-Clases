<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

// Ruta para la vista de inicio
Route::get('/', function () {
    return view('login');
})->name('login');

// Rutas para pacientes
Route::prefix('pacientes')->group(function () {
    Route::get('/', [PacienteController::class, 'index'])->name('pacientes'); // Mostrar lista de pacientes
    Route::get('/create', [PacienteController::class, 'create'])->name('crearpaciente'); // Formulario para crear nuevo paciente
    Route::post('/', [PacienteController::class, 'store'])->name('pacientes.store'); // Almacenar nuevo paciente
    Route::get('/{id}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit'); // Formulario para editar paciente
    Route::put('/{id}', [PacienteController::class, 'update'])->name('pacientes.update'); // Actualizar paciente
    Route::delete('/{id}', [PacienteController::class, 'destroy'])->name('pacientes.destroy'); // Eliminar paciente
   

});


// Ruta para la vista de inicio
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

