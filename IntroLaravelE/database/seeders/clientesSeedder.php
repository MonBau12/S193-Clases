<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([[
            'nombre' =>'Juan',
            'apellido'=>'Perex',
            'correo'=>'Juan@gmail.com',
            'telefono'=>'+1237894560'
        ],[
            'nombre' =>'Andrea',
            'apellido'=>'Arreondo',
            'correo'=>'Andrea@gmail.com',
            'telefono'=>'+1237894560'
        ],[
            'nombre' =>'Moises',
            'apellido'=>'Becerril',
            'correo'=>'Moi@gmail.com',
            'telefono'=>'+1237894560'
        ]]);
    }
}
