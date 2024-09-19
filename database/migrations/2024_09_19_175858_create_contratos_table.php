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
        Schema::create('contratos', function (Blueprint $table) {
            $table->string('idContrato')->primary(); // Clave primaria
            $table->string('tipoContrato');
            $table->float('salario');
            $table->date('fechaInicio');
            $table->date('fechaFin')->nullable();
            $table->string('Cargo');
            $table->string('nivelRiesgo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
