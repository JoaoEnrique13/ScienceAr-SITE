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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id('idQuiz');
            $table->unsignedBigInteger("idAdmin");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->foreign('idAdmin')->references('idAdmin')->on('administrators');//chave estrangeira da tabela administrators
            $table->string('title');
            $table->text('description');
            $table->text('img')->unique();
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
        Schema::dropIfExists('quizzes');
    }
};
