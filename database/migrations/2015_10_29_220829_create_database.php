<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id_matricula');
            $table->string('curso');
            $table->timestamps();
        });

        Schema::create('requerimentos', function (Blueprint $table) {
            $table->increments('id_requerimento');
            $table->integer('id_aluno');
            $table->foreign('id_aluno')->references('id_matricula')->on('alunos');
            $table->string('nome');
            $table->string('tipo');
            $table->string('observacao');
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
        Schema::drop('alunos');
        Schema::drop('requerimentos');
    }
}
