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
        Schema::create('produccion', function (Blueprint $table) {
            $table->id("id_produccion");
            $table->date("fecha");
            $table->integer("cantidad");
            $table->unsignedBigInteger("id_producto");
            $table->unsignedBigInteger("id_empleado");
            $table->foreign("id_producto")->references("id_producto")->on("productos");
            $table->foreign("id_empleado")->references("id_empleado")->on("empleados");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produccion');
    }
};
