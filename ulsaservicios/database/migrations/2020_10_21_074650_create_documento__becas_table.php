<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento__becas', function (Blueprint $table) {
            $table->id();
            $table->integer('Documento_id');
            $table->integer('matricula');
            $table->integer('PorcentajeTotal_poncentaje');
            $table->integer('Credito_porcentaje');
            $table->integer('Beca_porcentaje');
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
        Schema::dropIfExists('documento__becas');
    }
}
