<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Question 1
        Answer::create([
            'idQuestion' => 1,
            'answerText' => '9.8 m/s',
            'correct' => 1,
        ]);

        Answer::create([
            'idQuestion' => 1,
            'answerText' => '9.9 m/s',
            'correct' => 0,
        ]);

        //Question 2
        Answer::create([
            'idQuestion' => 2,
            'answerText' => '1925',
            'correct' => 0,
        ]);

        Answer::create([
            'idQuestion' => 2,
            'answerText' => '1915',
            'correct' => 1,
        ]);

        //Question 3
        Answer::create([
            'idQuestion' => 3,
            'answerText' => '2',
            'correct' => 1,
        ]);

        Answer::create([
            'idQuestion' => 3,
            'answerText' => '5',
            'correct' => 0,
        ]);

        //Question 4
        Answer::create([
            'idQuestion' => 4,
            'answerText' => '8',
            'correct' => 1,
        ]);

        Answer::create([
            'idQuestion' => 4,
            'answerText' => '9',
            'correct' => 0,
        ]);
    }
}
