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
        Schema::create('answers', function (Blueprint $table) {
            $table->id('idAnswer');
            $table->unsignedBigInteger("idQuestion");//precisar ser unsignedBigInteger para ser chave estrangeira
            $table->foreign('idQuestion')->references('idQuestion')->on('questions');//chave estrangeira da tabela questions
            $table->text('answerText');
            $table->boolean('correct');
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
        Schema::dropIfExists('answers');
    }
};
