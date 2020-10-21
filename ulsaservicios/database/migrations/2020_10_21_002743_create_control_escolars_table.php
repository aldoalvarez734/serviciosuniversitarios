<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlEscolarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_escolars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        
            $table->integer('matricula_id');
            $table->integer('encargado_id');
            $table->dateTime('fecha_de_tramite');
            $table->integer('tramite_id');
            $table->integer('estatus_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_escolars');
    }
}
