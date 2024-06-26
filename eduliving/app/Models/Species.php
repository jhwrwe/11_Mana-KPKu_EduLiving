<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;

    protected $fillable = [
        'species_name'
    ];

    public function animals() {
        return $this->hasMany(Animal::class);
    }

    public function quizzes() {
        return $this->hasMany(Quiz::class);
    }
    
}
