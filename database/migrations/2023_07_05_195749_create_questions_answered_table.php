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
        Schema::create('questions_answered', function (Blueprint $table) {
            $table->id('idQuestionAnswered');
            $table->unsignedBigInteger("idQuizAnswered");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->unsignedBigInteger("idAnswer");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->foreign('idQuizAnswered')->references('idQuizAnswered')->on('quizzes_answered');//chave estrangeira da tabela quizzes_answered
             $table->foreign('idAnswer')->references('idAnswer')->on('answers');//chave estrangeira da tabela answers
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
        Schema::dropIfExists('questions_answered');
    }
};
