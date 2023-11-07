<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasforoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestasforo', function (Blueprint $table) {
            $table->id();
            $table->string('Usuario');
            $table->text('Comentarios');
            $table->string('Fecha');
            $table->string('Hora_de_publicacion');
        });
    }
//La vida es dura mi hermano 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestasforo');
    }
}
