<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Perex',
                'email' => 'juanperex@gmail.com',
                'telefono' => '+123456078',

            ],[
                'nombre' => 'Pedro',
                'apellido' => 'Perez',
                'email' => 'pedroperez@gmail.com',
                'telefono' => '+123456078',
        
            ],[
                'nombre' => 'Maria',
                'apellido' => 'Rodriguez',
                'email' => 'maria@gmail.com',
                'telefono' => '+123456078',
            ]]);
    }
}
