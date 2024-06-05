<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="empleados";
    protected $primaryKey="id_empleado";
    protected $fillable=["nombre","apellido","posicion","fecha_contratacion"];
}
