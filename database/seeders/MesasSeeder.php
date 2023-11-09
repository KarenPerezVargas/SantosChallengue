<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para poblar la tabla "mesas"
        $mesas = [
            ['nombre' => 'I1', 'capacidad' => 1, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'I2', 'capacidad' => 1, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'I3', 'capacidad' => 1, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'I4', 'capacidad' => 1, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'I5', 'capacidad' => 1, 'estado' => 'Disponible', 'eliminado' => 1],

            ['nombre' => 'D1', 'capacidad' => 2, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'D2', 'capacidad' => 2, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'D3', 'capacidad' => 2, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'D4', 'capacidad' => 2, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'D5', 'capacidad' => 2, 'estado' => 'Disponible', 'eliminado' => 1],

            ['nombre' => 'T1', 'capacidad' => 3, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'T2', 'capacidad' => 3, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'T3', 'capacidad' => 3, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'T4', 'capacidad' => 3, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'T5', 'capacidad' => 3, 'estado' => 'Disponible', 'eliminado' => 1],

            ['nombre' => 'C1', 'capacidad' => 4, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'C2', 'capacidad' => 4, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'C3', 'capacidad' => 4, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'C4', 'capacidad' => 4, 'estado' => 'Disponible', 'eliminado' => 1],
            ['nombre' => 'C5', 'capacidad' => 4, 'estado' => 'Disponible', 'eliminado' => 1],

            // Agrega más datos según sea necesario
        ];

        // Insertar los datos en la tabla "mesas"
        DB::table('mesas')->insert($mesas);
    }
}
