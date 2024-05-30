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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_grado');
            $table->unsignedBigInteger('id_plantel');
            $table->unsignedBigInteger('id_carrera');
            $table->string('pwc')->nullable();
            $table->string('nombre_completo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('correo_personal')->nullable();
            $table->string('correo_institucional')->nullable();
            $table->string('curp')->nullable();
            $table->string('programa')->nullable();
            $table->string('valor_programa')->nullable();
            $table->timestamps();

            $table->foreign('id_grado')->references('id')->on('grados');
            $table->foreign('id_plantel')->references('id')->on('planteles');
            $table->foreign('id_carrera')->references('id')->on('carreras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
