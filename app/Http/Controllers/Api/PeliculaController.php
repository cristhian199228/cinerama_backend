<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pelicula::All();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar la solicitud
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'sinopsis' => 'required|string',
            'director' => 'required|string|max:255',
            'duracion' => 'required|integer',
            'fecha_estreno' => 'required|date',
            'codigo_api' => 'nullable|integer',
            'poster_path_api' => 'nullable|string',
            'wallpaper_path_api' => 'nullable|string',
            'trailer_path_api' => 'nullable|string',
        ]);

        // Crear y guardar la película
        $pelicula = Pelicula::create($validatedData);

        // Devolver una respuesta exitosa
        return response()->json([
            'message' => 'Película agregada exitosamente!',
            'pelicula' => $pelicula
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        return $pelicula->load('funcion.sala.cine');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function buscarPelicula(Request $request)
    {
        return Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJiNDYxZTUzNWE4Yjg0ZjM3NjMzMjk2MTY5MDBlNGM1OCIsIm5iZiI6MTcxOTk2NjQ1Mi40NTc4MSwic3ViIjoiNjY1MTA3ZGRmZjQ5YWRlNmFjOTVkNzk1Iiwic2NvcGVzIjpbImFwaV9yZWFkIl0sInZlcnNpb24iOjF9.fVv6bNMhuZuEWBXTU_XKtbnqJbvZtvteeHVKfUTYDus',
            'origin' => 'https://developer.themoviedb.org',
        ])->get(
            'https://try.readme.io/https://api.themoviedb.org/3/search/movie',
            [
                'query' => $request->valor,
                'include_adult' => 'false',
                'language' => 'es-MX',
                'page' => '1',
            ]
        );
    }

    public function buscarPeliculaPorId(Request $request)
    {
        $apiKey = 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJiNDYxZTUzNWE4Yjg0ZjM3NjMzMjk2MTY5MDBlNGM1OCIsIm5iZiI6MTcxOTk2NjQ1Mi40NTc4MSwic3ViIjoiNjY1MTA3ZGRmZjQ5YWRlNmFjOTVkNzk1Iiwic2NvcGVzIjpbImFwaV9yZWFkIl0sInZlcnNpb24iOjF9.fVv6bNMhuZuEWBXTU_XKtbnqJbvZtvteeHVKfUTYDus';

        $movieDetailsResponse = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $apiKey",
            'origin' => 'https://developer.themoviedb.org',
        ])->get(
            "https://api.themoviedb.org/3/movie/{$request->valor}",
            [
                'language' => 'es-MX',
            ]
        );

        $movieImagesResponse = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $apiKey",
            'origin' => 'https://developer.themoviedb.org',
        ])->get(
            "https://api.themoviedb.org/3/movie/{$request->valor}/images",
            [
                'include_image_language' => 'es,null',
            ]
        );

        $movieCreditsResponse = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $apiKey",
            'origin' => 'https://developer.themoviedb.org',
        ])->get(
            "https://api.themoviedb.org/3/movie/{$request->valor}/credits",
            [
                'language' => 'es-MX',
            ]
        );

        $movieVideosResponse = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => "Bearer $apiKey",
            'origin' => 'https://developer.themoviedb.org',
        ])->get(
            "https://api.themoviedb.org/3/movie/{$request->valor}/videos",
            [
                'language' => 'es-MX',
            ]
        );

        if ($movieDetailsResponse->successful() && $movieImagesResponse->successful() && $movieCreditsResponse->successful() && $movieVideosResponse->successful()) {
            $movieDetails = $movieDetailsResponse->json();
            $movieImages = $movieImagesResponse->json();
            $movieCredits = $movieCreditsResponse->json();
            $movieVideos = $movieVideosResponse->json();

            // Buscar el director en los créditos
            $director = collect($movieCredits['crew'])->firstWhere('job', 'Director');

            // Buscar los tráilers de YouTube


            // Combine details, images, and trailers into one response
            $movieDetails['images'] = $movieImages;
            $movieDetails['director'] = $director ? $director['name'] : 'N/A';
            $movieDetails['trailers'] = $movieVideos;

            return response()->json($movieDetails);
        } else {
            return response()->json(['error' => 'Unable to fetch movie details, images, credits, or videos'], 500);
        }
    }
}
