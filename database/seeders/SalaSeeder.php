<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($cine_id = 1; $cine_id <= 11; $cine_id++) {
            $numeroSalas = rand(1, 4);
            for ($descripcion = 1; $descripcion <= $numeroSalas; $descripcion++) {
                Sala::create([
                    'descripcion' => (string)$descripcion,
                    'cine_id' => $cine_id
                ]);
            }
        }
    }
}
