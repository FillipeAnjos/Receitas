<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Preparo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preparo', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('id_receita');
            $table->string('name', 100);
            $table->longText('titulo');
            $table->longText('descricao1');
            $table->longText('descricao2');
            $table->longText('descricao3');
            $table->longText('descricao4');
            $table->longText('descricao5');
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
        Schema::dropIfExists('preparo');
    }
}
