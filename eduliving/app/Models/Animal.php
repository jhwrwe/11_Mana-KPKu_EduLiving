<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'animal_name',
        'image',
        'latin_name',
        'species',
        'habitat',
        'continent',
        'description',
    ];

}
