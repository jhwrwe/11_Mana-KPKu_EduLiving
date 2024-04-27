<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnimalQuiz extends Model
{
    use HasFactory;

    // public function animal() : BelongsTo {

    //     return $this->BelongsTo(Animal::class);
    // }

    // public function quiz() : BelongsTo {

    //     return $this->belongsTo(Quiz::class);
    // }
}
