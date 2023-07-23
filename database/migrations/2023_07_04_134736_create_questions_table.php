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
        Schema::create('questions', function (Blueprint $table) {
            $table->id('idQuestion');
            $table->unsignedBigInteger("idQuiz");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->foreign('idQuiz')->references('idQuiz')->on('quizzes');//chave estrangeira da tabela quizzes
            $table->text('questionText');
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
        Schema::dropIfExists('questions');
    }
};
