<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal_name',
        'image',
        'latin_name',
        'species_id',
        'habitat',
        'continent',
        'description',
    ];

    public function user() : BelongsTo {

        return $this->belongsTo(User::class);
    }

    public function species() {
        return $this->belongsTo(Species::class);
    }
   

//     public function animal_quiz() : HasMany {

//         return $this->HasMany(AnimalQuiz::class);

// }
}
