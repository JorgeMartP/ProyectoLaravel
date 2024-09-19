<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $primaryKey = 'identificacion';  // Establecer la clave primaria
    public $incrementing = false; // Como la clave no es un integer, esto es necesario.

    protected $fillable = [
        'identificacion',
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'telefono',
        'correo',
        'departamento',
        'ciudad',
        'direccion',
        'banco',
        'numCuenta',
        'nit',
        'estado'
    ];
}
