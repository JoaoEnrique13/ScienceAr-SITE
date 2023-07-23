<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Quiz 1
        Question::create([
            'idQuiz' => 1,
            'questionText' => 'Qual a gravidade da Terra?',
        ]);

        Question::create([
            'idQuiz' => 1,
            'questionText' => 'Quando Albert Einstein publicou a Teoria da Relatividade Geral?',
        ]);


        //Quiz 2
        Question::create([
            'idQuiz' => 2,
            'questionText' => 'Quanto é 1 + 1?',
        ]);

        Question::create([
            'idQuiz' => 2,
            'questionText' => 'Quanto é 5 + 3?',
        ]);
    }
}
