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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable(); // ruta de imagen o URL
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('ingredientes');
            $table->string('preparacion');
            $table->string('calorias');
            $table->string('carbohidratos');
            $table->string('proteinas');
            $table->string('grasas');
            $table->string('dia'); // Lunes, Martes, etc.
            $table->string('tipo_comida'); // desayuno, almuerzo, cena
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
