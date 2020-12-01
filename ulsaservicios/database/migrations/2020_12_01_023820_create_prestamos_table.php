<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->integer('matricula_id');
            $table->integer('oficina_id');
            $table->integer('costo');
            $table->date('fecha_prestamo');
            $table->date('hora_prestamo');
            $table->date('fecha_prestamo_fin');
            $table->date('hora_prestamo_fin');
            $table->integer('estatus_prestamo_id')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
