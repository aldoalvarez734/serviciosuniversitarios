<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constancias', function (Blueprint $table) {
            $table->id();
            $table->integer('matricula_id');
            $table->integer('oficina_id');
            $table->integer('costo');
            $table->integer('carrera_id');
            $table->date('fecha_constancia');
            $table->integer('constancia_id');
            $table->integer('tipo_constancia_id');
            $table->integer('estatus_constancia_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constancias');
    }
}
