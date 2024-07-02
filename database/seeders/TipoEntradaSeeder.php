<?php

namespace Database\Seeders;

use App\Models\TipoEntrada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoEntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoEntrada::create([
            'nombre' => 'Adultos 2D',
            'precio' => '16.00'
        ]);
        TipoEntrada::create([
            'nombre' => 'Adultos 3D',
            'precio' => '20.00'
        ]);
        TipoEntrada::create([
            'nombre' => 'Niños 2D',
            'precio' => '10.00'
        ]);
        TipoEntrada::create([
            'nombre' => 'Niños 3D',
            'precio' => '12.00'
        ]);
        TipoEntrada::create([
            'nombre' => 'Mayores de 60 2D',
            'precio' => '8.00'
        ]);
        TipoEntrada::create([
            'nombre' => 'Mayores de 60 3D',
            'precio' => '10.00'
        ]);
    }
}
