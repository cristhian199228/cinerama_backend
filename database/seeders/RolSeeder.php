<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::create([
            'descripcion'=> 'Administrador'
        ]);
        Rol::create([
            'descripcion'=> 'Usuario'
        ]);
        Rol::create([
            'descripcion'=> 'Invitado'
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 1,
            'rol_id' => 1
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 2,
            'rol_id' => 1
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 3,
            'rol_id' => 1
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 4,
            'rol_id' => 1
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 5,
            'rol_id' => 1
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 1,
            'rol_id' => 3
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 2,
            'rol_id' => 3
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 3,
            'rol_id' => 3
        ]);
        DB::table('menu_rol')->insert([
            'menu_id' => 4,
            'rol_id' => 3
        ]);
    }
}
