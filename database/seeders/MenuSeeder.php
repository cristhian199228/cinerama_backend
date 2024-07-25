<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'descripcion'=> 'CARTELERA',
            'to' => '/'
        ]);
        Menu::create([
            'descripcion'=> 'PELICULAS',
            'to' => '/peliculas'
        ]);
        Menu::create([
            'descripcion'=> 'CINES',
            'to' => '/cines'
        ]);
        Menu::create([
            'descripcion'=> 'ADMINISTRADOR',
            'to' => '/administrador/ciudades'
        ]);
    }
}
