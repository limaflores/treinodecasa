<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('professor_id');

            $table->string('nome_aluno');
            $table->string('email');
            $table->string('objetivo');
            $table->string('descricao');
            $table->string('nivel_treinamento');
            $table->string('observacoes');
            $table->string('lesoes');
            $table->string('slug');

            $table->timestamps();

            $table->foreign('professor_id')->references('id')->on('professores');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
