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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
                'language' => 'en-US',
                'page' => '1',
            ]
        );
    }
}
