<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'animal_id'
    ];
}
