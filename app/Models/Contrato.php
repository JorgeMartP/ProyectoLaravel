<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Contrato extends Model
{
    protected $table = 'contratos';

    // Define la clave primaria
    protected $primaryKey = 'idContrato';

    // Establece si la clave primaria es auto incremental
    public $incrementing = false;

    // Tipo de datos de la clave primaria
    protected $keyType = 'string';

    // Campos que se pueden llenar
    protected $fillable = [
        'idContrato',
        'tipoContrato',
        'salario',
        'fechaInicio',
        'fechaFin',
        'Cargo',
        'nivelRiesgo',
    ];
 // Campos de fecha a tratar como instancias de Carbon
 protected $dates = ['fechaInicio', 'fechaFin'];

 // Accesor para formatear la fecha de inicio
 public function getFechaInicioFormattedAttribute()
 {
     return $this->fechaInicio ? Carbon::parse($this->fechaInicio)->format('Y-m-d') : 'N/A';
 }

 // Accesor para formatear la fecha de fin
 public function getFechaFinFormattedAttribute()
 {
     return $this->fechaFin ? Carbon::parse($this->fechaFin)->format('Y-m-d') : 'N/A';
 }

}
