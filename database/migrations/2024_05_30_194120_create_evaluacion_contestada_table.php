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
        Schema::create('evaluacion_contestada', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_matricula');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('total_puntos');
            $table->text('comentarios');
            $table->boolean('estatus');

            $table->foreign('id_matricula')->references('id')->on('matricula');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluacion_contestada');
    }
};
