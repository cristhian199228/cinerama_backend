<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Cristhian Vargas',
            'email' => 'cristhian199228@gmail.com',
            'password' => Hash::make('DesarrolloWeb123.'),
            'rol_id' => 1
        ]);
        User::create([
            'name' => 'Cristhian Vargas',
            'email' => 'U23222694@utp.edu.pe',
            'password' => Hash::make('23222694'),
            'rol_id' => 2
        ]);
        User::create([
            'name' => 'Invitado',
            'email' => 'invitado@mail.com',
            'password' => Hash::make('Zeuzito130794.'),
            'rol_id' => 3
        ]);
        User::create([
            'name' => 'Victor Portuguez',
            'email' => 'U19303672@utp.edu.pe',
            'password' => Hash::make('19303672'),
            'rol_id' => 1
        ]);
        User::create([
            'name' => 'Yeder Laura',
            'email' => 'U1420897@utp.edu.pe',
            'password' => Hash::make('1420897'),
            'rol_id' => 1
        ]);
    }
}
