<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sala;
use App\Models\Asiento;

class AsientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todas las salas
        $salas = Sala::all();

        foreach ($salas as $sala) {
            // Agregar 48 asientos por cada sala
            for ($i = 1; $i <= 48; $i++) {
                Asiento::create([
                    'sala_id' => $sala->id,
                    'descripcion' => $i                  
                ]);
            }
        }
    }
}
