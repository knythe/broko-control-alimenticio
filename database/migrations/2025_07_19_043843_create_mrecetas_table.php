<?php

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
        Schema::create('mrecetas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mdia_id');
            $table->unsignedBigInteger('receta_id');
            $table->string('tipo_comida'); // desayuno, almuerzo, cena

            $table->foreign('mdia_id')->references('id')->on('mdias')->onDelete('cascade');
            $table->foreign('receta_id')->references('id')->on('recetas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mrecetas');
    }
};
