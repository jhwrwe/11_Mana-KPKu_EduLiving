<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class User_Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'animal_id'
    ];

    public function animal(){

        return $this->belongsTo(Animal::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

}
