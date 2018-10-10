<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('situacao');
            $table->integer('departamentos_id')->unsigned();
            $table->foreign('departamentos_id')->references('id')->on('departamentos')->onDelete('cascade');;
            $table->integer('ordemservicos_id')->unsigned();
            $table->foreign('ordemservicos_id')->references('id')->on('ordemservicos')->onDelete('cascade');;
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
        Schema::dropIfExists('tarefas');
    }
}
