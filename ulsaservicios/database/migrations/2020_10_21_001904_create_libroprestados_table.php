<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroprestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libroprestados', function (Blueprint $table) {
            $table->id('renovacion_id');
            $table->timestamps();
            $table->integer('libro_id');
            $table->dateTime('fecha_renovacion');
            $table->dateTime('fecha_devolucion');              
            $table->integer('alumno_id');
            $table->integer('campus_id');                 
                            

        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libroprestados');
    }
}
