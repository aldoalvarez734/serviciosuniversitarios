<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosleidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librosleidos', function (Blueprint $table) {
            $table->id('libroleido_id');
            $table->timestamps();
            $table->integer('libro_id');
            $table->string ('titulo'), 60;
            $table->string ('devuelto'), 60;
            $table->integer('status_id');
            $table->integer('alumno_id');
            $table->integer('campus_id'];
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('librosleidos');
    }
}
