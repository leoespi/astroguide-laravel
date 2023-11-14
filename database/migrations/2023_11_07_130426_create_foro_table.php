<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foro', function (Blueprint $table) {
            $table->id();
            $table->biginteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->text('Comentarios');
            $table->string('Codigo_publicacion');
            $table->date('Fecha');
            $table->time('Hora_publicacion');

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
        Schema::dropIfExists('foro');
    }
}


