<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento__boletas', function (Blueprint $table) {
            $table->id();
            $table->integer('Documento_id');
            $table->integer('matricula');
            $table->float('Promedio');
            $table->int('MateriasReprobadas');
            $table->int('Faltas');
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
        Schema::dropIfExists('documento__boletas');
    }
}
