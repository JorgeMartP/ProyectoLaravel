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
        Schema::create('empleados', function (Blueprint $table) {
            $table->string('identificacion')->primary(); // Clave primaria
            $table->string('primerNombre');
            $table->string('segundoNombre')->nullable();
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('telefono');
            $table->string('correo');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('banco');
            $table->string('numCuenta');
            $table->string('nit');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
