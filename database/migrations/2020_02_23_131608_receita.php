<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Receita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receita', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('categoria', 100);
            $table->string('nome', 100);
            $table->integer('favorito');
            $table->string('img', 100);
            $table->string('ingrediente_1', 200);
            $table->string('ingrediente_2', 200);
            $table->string('ingrediente_3', 200);
            $table->string('ingrediente_4', 200);
            $table->string('ingrediente_5', 200);
            $table->string('ingrediente_6', 200);
            $table->string('ingrediente_7', 200);
            $table->string('ingrediente_8', 200);
            $table->string('ingrediente_9', 200);
            $table->string('ingrediente_10', 200);
            $table->string('ingrediente_11', 200);
            $table->string('ingrediente_12', 200);
            $table->string('ingrediente_13', 200);
            $table->string('ingrediente_14', 200);
            $table->string('ingrediente_15', 200);
            $table->string('ingrediente_16', 200);
            $table->string('ingrediente_17', 200);
            $table->string('ingrediente_18', 200);
            $table->string('ingrediente_19', 200);
            $table->string('ingrediente_20', 200);
            $table->string('ingrediente_21', 200);
            $table->string('ingrediente_22', 200);
            $table->string('ingrediente_23', 200);
            $table->string('ingrediente_24', 200);
            $table->string('ingrediente_25', 200);
            $table->string('ingrediente_26', 200);
            $table->string('ingrediente_27', 200);
            $table->string('ingrediente_28', 200);
            $table->string('ingrediente_29', 200);
            $table->string('ingrediente_30', 200);
            $table->string('ingrediente_31', 200);
            $table->string('ingrediente_32', 200);
            $table->string('ingrediente_33', 200);
            $table->string('ingrediente_34', 200);
            $table->string('ingrediente_35', 200);
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
        Schema::dropIfExists('receita');
    }
}
