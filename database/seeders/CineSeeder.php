<?php

namespace Database\Seeders;

use App\Models\Cine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cine::create([
            'descripcion' => 'CINERAMA PACIFICO',
            'ciudad_id' => '4'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA MINKA',
            'ciudad_id' => '4'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA CHIMBOTE',
            'ciudad_id' => '8'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA QUINDE',
            'ciudad_id' => '4'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA TARAPOTO',
            'ciudad_id' => '7'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA CAJAMARCA',
            'ciudad_id' => '6'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA SOL',
            'ciudad_id' => '5'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA HUACHO',
            'ciudad_id' => '4'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA MOYOBAMBA',
            'ciudad_id' => '3'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA CUSCO',
            'ciudad_id' => '2'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA PIURA',
            'ciudad_id' => '1'
        ]);
    }
}
