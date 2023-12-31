<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswered extends Model
{
    use HasFactory;

    protected $table = 'questions_answered';

    protected $fillable = [
        'idQuizAnswered',
        'idAnswer',
    ];
}
