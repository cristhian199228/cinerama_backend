<?php

namespace Database\Seeders;

use App\Models\TipoEntrada;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MenuSeeder::class,
            RolSeeder::class,
            UserSeeder::class,
            CiudadSeeder::class,
            CineSeeder::class,
            SalaSeeder::class,
            AsientoSeeder::class,
            TipoEntradaSeeder::class,

            //PeliculaSeeder::class           
        ]);
    }
}
