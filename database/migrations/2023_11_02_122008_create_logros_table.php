<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logros', function (Blueprint $table) {
            $table->id();
            $table->text('Nombre_del_Logro');
            $table->text('Rareza');
<<<<<<< HEAD
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
=======
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
>>>>>>> 9d30b7ed793eb98975170dee26756392c7b4e7cf
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logros');
    }
}
