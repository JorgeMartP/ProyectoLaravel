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
        Schema::create('empresas', function (Blueprint $table) {
            $table->string('nit')->primary(); // Clave primaria
            $table->string('tipoContribuyente');
            $table->string('digitoVerificacion');
            $table->string('nombreEmpresa'); // El nombre debe ser varchar en lugar de int
            $table->string('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('rut');
            $table->binary('logo'); // Tipo byte
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
