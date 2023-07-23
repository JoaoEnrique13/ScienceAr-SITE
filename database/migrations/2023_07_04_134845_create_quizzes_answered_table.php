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
        Schema::create('quizzes_answered', function (Blueprint $table) {
            $table->id('idQuizAnswered');
            $table->unsignedBigInteger("idQuiz");//precisar ser unsignedBigInteger para ser chave estrangeira
            // $table->unsignedBigInteger("idAnswer");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->unsignedBigInteger("idStudents");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->foreign('idQuiz')->references('idQuiz')->on('quizzes');//chave estrangeira da tabela quizzes
            // $table->foreign('idAnswer')->references('idAnswer')->on('answers');//chave estrangeira da tabela answers
            $table->foreign('idStudents')->references('idStudents')->on('students');//chave estrangeira da tabela students
            // $table->boolean('correct');
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
        Schema::dropIfExists('quizzes_answered');
    }
};
