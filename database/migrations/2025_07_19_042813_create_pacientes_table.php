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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('sexo');
            $table->string('edad');
            $table->string('peso'); // en kg
            $table->string('altura'); // en cm
            $table->string('nivel_actividad'); // bajo, moderado, alto
            $table->string('tipo_diabetes'); // tipo 1, tipo 2, gestacional
            $table->string('objetivo'); // mantener, bajar peso, subir masa
            $table->string('restricciones')->nullable(); // intolerancias o enfermedades adicionales
            $table->string('preferencias')->nullable(); // tipo de alimentos preferidos
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
