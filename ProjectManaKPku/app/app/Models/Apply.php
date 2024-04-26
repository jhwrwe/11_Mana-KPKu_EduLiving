<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $fillable =['id_school_apply','id_teacher_apply','status'];
    public function schools()
    {
        return $this->belongsToMany(Schools::class, 'applies', 'id', 'id_school_apply');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teachers::class, 'applies', 'id', 'id_teacher_apply');
    }

}
