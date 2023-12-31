<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAnswered extends Model
{
    use HasFactory;

    protected $table = 'quizzes_answered';

    protected $fillable = [
        'idQuiz',
        'idStudents',
    ];
}
