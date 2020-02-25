<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Receitaenviada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitaenviada', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->string('titulo', 100);
            $table->string('categoria', 100);
            $table->integer('tempoPreparo');
            $table->integer('quantidade');
            $table->string('microondas', 5);
            $table->longText('ingredientes');
            $table->longText('preparo');
            $table->rememberToken();
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
        Schema::dropIfExists('receitaenviada');
    }
}
