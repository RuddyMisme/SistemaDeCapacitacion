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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->integer('id_inscripcion', true);
            $table->integer('id_usuario')->nullable()->index('id_usuario');
            $table->integer('id_curso')->nullable()->index('id_curso');
            $table->date('fecha_inscripcion')->nullable();
            $table->enum('estado', ['Inscrito', 'Completado', 'Cancelado'])->nullable()->default('Inscrito');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
