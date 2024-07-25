<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'descripcion' => 'COMBO POPCORN + GASEOSA',
            'precio' => '30.00',
            'path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoELjCsbyBIeMAoa6QG5RlrpZUdCAC-uj-fA&s'
        ]);
        Producto::create([
            'descripcion' => 'GASEOSA',
            'precio' => '17.00',
            'path' => 'https://cinemarkla.modyocdn.com/uploads/b8b7c357-38bb-4702-8b09-bbb512bb1fba/original/VASO-grande.png'
        ]);
        Producto::create([
            'descripcion' => 'POPCORN',
            'precio' => '17.00',
            'path' => 'https://png.pngtree.com/png-vector/20240205/ourlarge/pngtree-cinema-pop-corn-food-png-image_11543767.png'
        ]);
        Producto::create([
            'descripcion' => 'AGUA',
            'precio' => '8.00',
            'path' => 'https://cinemarkla.modyocdn.com/uploads/f640f728-1366-4269-8cfd-5073719c5dda/original/agua.png'
        ]);
        Producto::create([
            'descripcion' => 'HOT DOG',
            'precio' => '9.00',
            'path' => 'https://cinemarkla.modyocdn.com/uploads/c15d3878-0a4d-44ba-8512-e8f06a761909/original/frankfurter.png'
        ]);
    }
}
