<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('secciones')->insert([
            ['nombre' => 'Cocina'],
            ['nombre' => 'Sala de Estar'],
            ['nombre' => 'Comedor'],
            ['nombre' => 'Dormitorio'],
            ['nombre' => 'Baño'],
            ['nombre' => 'Oficina o Estudio'],
            ['nombre' => 'Exterior'],
            ['nombre' => 'Espacios Multifuncionales'],
            ['nombre' => 'Muebles Perzonalizados'],
            // Agrega aquí las demás secciones
        ]);
    }
}
