<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionDelServicioBecariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_del_servicio_becarios', function (Blueprint $table) {
            $table->id();
            $table->integer('Documento_id');
            $table->integer('matricula');
            $table->string('Evaluacion',10);
            $table->integer('Oficina_id');
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
        Schema::dropIfExists('evaluacion_del_servicio_becarios');
    }
}
