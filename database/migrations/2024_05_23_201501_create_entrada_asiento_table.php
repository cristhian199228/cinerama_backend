<?php

use App\Models\Asiento;
use App\Models\Entrada;
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
        Schema::create('entrada_asiento', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Entrada::class)->constrained();
            $table->foreignIdFor(Asiento::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrada_asiento');
    }
};
