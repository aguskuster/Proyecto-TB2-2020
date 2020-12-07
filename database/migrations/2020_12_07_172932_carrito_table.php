<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proveedor');
            $table->string('categoria');
            $table->string('nombreProducto');
            $table->string('precioUnitario');
            $table->string('cantidad');
            $table->string('vendedor');
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito_table');
    }
}
