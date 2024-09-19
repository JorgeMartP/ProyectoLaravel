<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = 'nit';

    // Desactivar los incrementos automáticos ya que 'nit' no es un entero
    public $incrementing = false;

    // Definir el tipo de la clave primaria
    protected $keyType = 'string';

    // Los atributos que son asignables en masa
    protected $fillable = [
        'nit',
        'tipoContribuyente',
        'digitoVerificacion',
        'nombreEmpresa',
        'telefono',
        'email',
        'direccion',
        'rut',
        'logo',
    ];
    public $timestamps = true;

}
