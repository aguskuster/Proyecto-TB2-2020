<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proveedor');
            $table->string('categoria');
            $table->string('nombreProducto');
            $table->string('precioUnitario');
            $table->string('moneda');
            $table->string('cantidad');
            $table->string('empleado');
            $table->timestamp('created_at')->useCurrent();
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
        Schema::dropIfExists('compra_table');
    }
}
