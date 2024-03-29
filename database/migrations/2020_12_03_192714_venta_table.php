<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clienteRUT');
            $table->string('clienteNombre');
            $table->string('insumoNombre');
            $table->string('insumoPrecio');
            $table->string('insumoCantidad');
            $table->string('empleadoNombre');
            
            
            $table->string('dia');
            $table->string('mes');
            $table->string('anio');
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_table');
    }
}
