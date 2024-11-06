<?php

use App\Http\Controllers\PrendaController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::post('/registroprendas', [PrendaController::class, 'registroprendas'])->name('registroprendas');
