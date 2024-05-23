<?php

use App\Models\Pelicula;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_entradas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Ej: Niño, Adulto, Mayor de 60, 2D, 3D
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_entradas');
    }
};
