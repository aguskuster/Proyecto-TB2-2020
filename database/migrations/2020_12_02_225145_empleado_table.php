<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('contrasenia');
            $table->string('edad');
            $table->string('telefono');
            $table->string('email');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->unique('ci');
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
        Schema::dropIfExists('empleado_table');
    }
}
