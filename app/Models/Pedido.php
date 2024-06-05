<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="pedidos";
    protected $primaryKey="id_pedido";
    protected $fillable=["fecha_pedido","total","id_cliente","id_empleado"];
}
