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
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/pacifico.jpg',
            'ciudad_id' => '4'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA MINKA',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/minka.jpg',
            'ciudad_id' => '4'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA CHIMBOTE',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/WhatsApp%20Image%202022-10-13%20at%2022.48.12.jpeg',
            'ciudad_id' => '8'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA QUINDE',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/ICAQUINDE.jpeg',
            'ciudad_id' => '4'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA TARAPOTO',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/WhatsApp%20Image%202022-10-13%20at%2014.38.54.jpeg',
            'ciudad_id' => '7'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA CAJAMARCA',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/WhatsApp%20Image%202022-10-13%20at%2022.48.43.jpeg',
            'ciudad_id' => '6'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA SOL',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/WhatsApp%20Image%202022-10-13%20at%2022.06.44.jpeg',
            'ciudad_id' => '5'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA HUACHO',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/IMG-20231027-WA0026.jpg',
            'ciudad_id' => '4'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA MOYOBAMBA',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/WhatsApp%20Image%202022-10-12%20at%2019.36.43.jpeg',
            'ciudad_id' => '3'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA CUSCO',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/WhatsApp%20Image%202022-10-13%20at%2022.50.32.jpeg',
            'ciudad_id' => '2'
        ]);
        Cine::create([
            'descripcion' => 'CINERAMA PIURA',
            'path_url' => 'https://www.pentarama.com/_admin/assets/images/cines/IMG-20240510-WA0017.jpg',
            'ciudad_id' => '1'
        ]);
    }
}
