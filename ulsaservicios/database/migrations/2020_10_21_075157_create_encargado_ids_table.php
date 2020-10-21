<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncargadoIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargado_ids', function (Blueprint $table) {
            $table->id();
            $table->integer('Encargado_id');
            $table->string('Cargo',11);
            $table->string('Nombre',20);
            $table->string('Paterno',20);
            $table->string('Materno',20);
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
        Schema::dropIfExists('encargado_ids');
    }
}
