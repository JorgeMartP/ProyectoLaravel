<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorasExtra extends Model
{
    // Define la tabla asociada al modelo
    protected $table = 'horas_extras';

    // Define la clave primaria
    protected $primaryKey = 'idHorasExtra';

    // Establece si la clave primaria es auto incremental
    public $incrementing = true;

    // Tipo de datos de la clave primaria
    protected $keyType = 'int';

    // Campos que se pueden llenar
    protected $fillable = [
        'cantidadHoras',
        'total',
        'tipoHorasExtra',
    ];
}
