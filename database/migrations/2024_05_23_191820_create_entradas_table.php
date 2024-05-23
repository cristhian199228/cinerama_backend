<?php

use App\Models\Asiento;
use App\Models\Funcion;
use App\Models\TipoEntrada;
use App\Models\User;
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
        Schema::create('entradas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Funcion::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(TipoEntrada::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entradas');
    }
};
