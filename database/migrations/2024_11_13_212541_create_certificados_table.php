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
        Schema::create('certificados', function (Blueprint $table) {
            $table->integer('id_certificado', true);
            $table->integer('id_usuario')->nullable()->index('id_usuario');
            $table->integer('id_curso')->nullable()->index('id_curso');
            $table->date('fecha_emision')->nullable();
            $table->string('codigo_certificado', 50)->nullable()->unique('codigo_certificado');
            $table->string('url_certificado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};
