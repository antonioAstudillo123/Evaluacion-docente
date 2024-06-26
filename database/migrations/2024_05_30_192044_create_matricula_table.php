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
        Schema::create('matricula', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumno');
            $table->unsignedBigInteger('id_grupo');
            $table->unsignedBigInteger('id_docente');
            $table->unsignedBigInteger('id_materia');
            $table->boolean('contestada');
            $table->timestamps();


            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->foreign('id_grupo')->references('id')->on('grupos');
            $table->foreign('id_docente')->references('id')->on('docentes');
            $table->foreign('id_materia')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matricula');
    }
};
