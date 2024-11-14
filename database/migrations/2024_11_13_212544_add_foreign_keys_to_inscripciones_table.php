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
        Schema::table('inscripciones', function (Blueprint $table) {
            $table->foreign(['id_usuario'], 'inscripciones_ibfk_1')->references(['id_usuario'])->on('usuarios')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['id_curso'], 'inscripciones_ibfk_2')->references(['id_curso'])->on('cursos')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inscripciones', function (Blueprint $table) {
            $table->dropForeign('inscripciones_ibfk_1');
            $table->dropForeign('inscripciones_ibfk_2');
        });
    }
};
