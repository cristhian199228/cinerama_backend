<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ConsultarPelis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:consultar-pelis';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJiNDYxZTUzNWE4Yjg0ZjM3NjMzMjk2MTY5MDBlNGM1OCIsIm5iZiI6MTcxOTUxMjM2OC44NzM3Nywic3ViIjoiNjY1MTA3ZGRmZjQ5YWRlNmFjOTVkNzk1Iiwic2NvcGVzIjpbImFwaV9yZWFkIl0sInZlcnNpb24iOjF9.o2xmHWvjJs2UScbiJkPpfQA8njMuiYggjFGzS8RRMAw',
            'accept' => 'application/json',
        ])->get('https://api.themoviedb.org/3/movie/now_playing', [
            'language' => 'es-MX',
            'page' => 1,
        ]);
        $data = $response->json();

        // Extraer solo los resultados
        $results = $data['results'];

        // Mostrar los resultados
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}
