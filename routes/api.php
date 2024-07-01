<?php

use App\Http\Middleware\AuthenticateOrGuest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user()->load('rol.menu');
})->middleware(AuthenticateOrGuest::class);