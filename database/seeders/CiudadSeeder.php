<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ciudad::create([
            'descripcion'=> 'PIURA'
        ]);
        Ciudad::create([
            'descripcion'=> 'CUSCO'
        ]);
        Ciudad::create([
            'descripcion'=> 'SAN MARTIN'
        ]);
        Ciudad::create([
            'descripcion'=> 'LIMA'
        ]);
        Ciudad::create([
            'descripcion'=> 'ICA'
        ]);
        Ciudad::create([
            'descripcion'=> 'CAJAMARCA'
        ]);
        Ciudad::create([
            'descripcion'=> 'TARAPOTO'
        ]);
        Ciudad::create([
            'descripcion'=> 'ANCASH'
        ]);
    }
}
