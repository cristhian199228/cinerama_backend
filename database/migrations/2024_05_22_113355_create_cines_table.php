<?php

use App\Models\Ciudad;
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
        Schema::create('cines', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->integer('codigo_api');
            $table->foreignIdFor(Ciudad::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cines');
    }
};