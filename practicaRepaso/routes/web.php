<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});

route::view('/','inicio')->name('rutainicio');
route::view('/repaso','repaso1')->name('rutarepaso');

use App\Http\Controllers\ConvertidorController;

Route::get('/convertir', [ConvertidorController::class, 'convertir']);
