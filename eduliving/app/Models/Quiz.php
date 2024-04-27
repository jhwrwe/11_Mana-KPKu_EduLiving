<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answers',
        'false_answer_1',
        'false_answer_2',
        'false_answer_3',
    ];

    // public function animal_quiz() : HasMany {

    //     return $this->HasMany(AnimalQuiz::class);
    // }
}
