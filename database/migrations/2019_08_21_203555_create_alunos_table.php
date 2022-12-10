<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
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
            $table->string('nome')->nullable()->default(NULL);
            $table->string('email')->nullable()->default(NULL);
            $table->string('telefone')->nullable()->default(NULL);
            $table->string('objetivo')->nullable()->default(NULL);

            $table->dateTime('datanascimento')->nullable()->default(NULL);
            $table->string('nivelcondicionamento')->nullable()->default(NULL);

            $table->decimal('vo2')->nullable()->default(NULL);
            $table->integer('professor')->nullable()->default(NULL);
            $table->string('lesoes')->nullable()->default(NULL);
            $table->string('observacoes')->nullable()->default(NULL);
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
        Schema::dropIfExists('alunos');
    }
}
