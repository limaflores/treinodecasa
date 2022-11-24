<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nome');
            $table->dateTime('data_nascimento');
            $table->string('email');
            $table->string('objetivo');
            $table->string('frequencia');
            $table->string('lesao');
            $table->string('observacao');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); //Nome da chave estrangeira: alunos_users_id_foreign
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
}
