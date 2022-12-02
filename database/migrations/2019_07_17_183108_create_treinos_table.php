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
            $table->increments('id');
            $table->string('objetivo')->nullable()->default(NULL);
            $table->string('descricao')->nullable()->default(NULL);
            $table->string('observacao')->nullable()->default(NULL);
            // $table->integer('numerotreino');
            $table->integer('aluno')->nullable()->default(NULL);
            $table->string('nometreino')->nullable()->default(NULL);
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
        Schema::dropIfExists('treinos');
    }
}
