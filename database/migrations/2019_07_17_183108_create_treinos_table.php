<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('professor_id');

            $table->string('objetivo');
            $table->string('descricao');
            $table->integer('numerotreino');
            $table->integer('aluno');
            $table->string('nometreino');
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
        Schema::dropIfExists('treinos');
    }
}
