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
        Schema::create('recursos_expositor', function (Blueprint $table) {
            $table->integer('id_recurso', true);
            $table->integer('id_usuario')->nullable()->index('id_usuario');
            $table->integer('id_curso')->nullable()->index('id_curso');
            $table->enum('tipo_recurso', ['Video', 'Documento', 'Imagen', 'Otro']);
            $table->string('url_recurso', 100)->nullable();
            $table->string('id_reunion_zoom', 50)->nullable();
            $table->string('enlace_zoom')->nullable();
            $table->text('materiales')->nullable();
            $table->text('notas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos_expositor');
    }
};
