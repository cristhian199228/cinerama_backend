<?php

use App\Http\Controllers\Api\AsientoController;
use App\Http\Controllers\Api\CineController;
use App\Http\Controllers\Api\CiudadController;
use App\Http\Controllers\Api\FuncionController;
use App\Http\Controllers\Api\PeliculaController;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\SalaController;
use App\Http\Controllers\Api\TipoEntradaController;
use App\Http\Middleware\AuthenticateOrGuest;
use App\Models\Asiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user()->load('rol.menu');
})->middleware(AuthenticateOrGuest::class);

Route::apiresource('ciudad', CiudadController::class);
Route::apiresource('cine', CineController::class);
Route::apiresource('sala', SalaController::class);
Route::apiresource('tipoentrada', TipoEntradaController::class);
Route::apiresource('pelicula', PeliculaController::class);
Route::apiresource('funcion', FuncionController::class);
Route::apiresource('asiento', AsientoController::class);
Route::apiresource('productos', ProductoController::class);


Route::post('buscarPelicula',[PeliculaController::class,'buscarPelicula']);
Route::post('buscarPeliculaPorId',[PeliculaController::class,'buscarPeliculaPorId']);
Route::get('salaById/{id}',[SalaController::class,'salaById']);
