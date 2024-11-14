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
        Schema::create('registro_curso', function (Blueprint $table) {
            $table->integer('id_detalle_curso', true);
            $table->integer('id_usuario')->nullable()->index('id_usuario');
            $table->integer('id_curso')->nullable()->index('id_curso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_curso');
    }
};
