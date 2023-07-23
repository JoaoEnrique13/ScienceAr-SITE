<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ALUNO NÃO PODE RESPONDER DUAS VEZES O MESMO QUIZ

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quizzes_answered', function (Blueprint $table) {
            $table->unique(['idStudents', 'idQuiz']);//QUIZ DO ALUNO E DO QUIZ NÃO PODE REPETIR
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quizzes_answered', function (Blueprint $table) {
            //
        });
    }
};
