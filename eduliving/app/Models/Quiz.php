<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'species_id'
    ];

    public function species() : BelongsTo {

        return $this->belongsTo(Species::class);
    }
}
