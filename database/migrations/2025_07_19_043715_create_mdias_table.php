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
        Schema::create('mdias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('msemana_id');
            $table->string('dia'); // Lunes, Martes, etc.
            $table->foreign('msemana_id')->references('id')->on('msemanas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mdias');
    }
};
