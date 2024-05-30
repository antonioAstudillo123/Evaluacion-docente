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
        Schema::create('evaluacion_contestada_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_evaluacion_contestada');
            $table->unsignedBigInteger('id_pregunta');
            $table->unsignedBigInteger('id_respuesta');
            $table->timestamps();

            $table->foreign('id_evaluacion_contestada')->references('id')->on('evaluacion_contestada');
            $table->foreign('id_pregunta')->references('id')->on('preguntas');
            $table->foreign('id_respuesta')->references('id')->on('respuestas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_contestada_detalle');
    }
};
