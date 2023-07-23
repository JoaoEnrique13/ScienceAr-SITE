<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['idQuiz', 'questionText'];

    protected $primaryKey = 'idQuestion';

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'idQuiz', 'idQuiz');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'idQuestion', 'idQuestion');
    }
}
