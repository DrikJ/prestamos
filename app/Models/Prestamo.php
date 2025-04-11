<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $table = 'prestamo'; // nombre de la tabla
    protected $primaryKey = 'id_prestamo';
    public $incrementing = true;
    protected $keyType = "int";
    public $timestamps = false;

    protected $fillable = [
        "fk_id_empleado",
        "fecha_solicitud",
        "monto",
        "plazo",
        "fecha_aprob",
        "tasa_mensual",
        "pago_fijo_cap",
        "fecha_ini_desc",
        "fecha_fin_desc",
        "saldo_actual",
        "estado"
    ];
}
