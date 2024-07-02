<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelicula::create([
            'titulo' => 'Mi Villano Favorito 4',
            'sinopsis' => "Gru, Lucy y las niñas -Margo, Edith y Agnes- dan la bienvenida a un nuevo miembro en la familia: Gru Junior, que parece llegar con el propósito de ser un suplicio para su padre. Gru tendrá que enfrentarse en esta ocasión a su nueva némesis Maxime Le Mal y su sofisticada y malévola novia Valentina, lo que obligará a la familia a tener que darse a la fuga. Cuarta entrega de 'Gru, mi villano favorito'",
            'director' => 'Chris Renaud',
            'duracion' => '95',
            'fecha_estreno' => '2024-06-20',
            'codigo_api' => '519182',
            'poster_path_api' => '/6BcxgP05jDip4Zjh2P5Be2aNi0Z.jpg',
            'wallpaper_path_api' => '/fDmci71SMkfZM8RnCuXJVDPaSdE.jpg"',
            'trailer_path_api' => 'e5VSw0apmB4',
        ]);
    }
}
