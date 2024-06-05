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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id("id_pedido");
            $table->date("fecha_pedido");
            $table->double("total");
            $table->unsignedBigInteger("id_cliente");
            $table->unsignedBigInteger("id_empleado");
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign("id_empleado")->references("id_empleado")->on("empleados");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
