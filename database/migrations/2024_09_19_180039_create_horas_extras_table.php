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
        Schema::create('horas_extras', function (Blueprint $table) {
            $table->increments('idHorasExtra'); // Clave primaria
            $table->integer('cantidadHoras');
            $table->float('total'); 
            $table->integer('tipoHorasExtra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horas_extras');
    }
};
