<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{

    use HasFactory;

    protected $fillable = ['name','majors','work_experience','attended','skills','email','password','username','nationality','gender','Additional_information','Hobbys','age','image','about','description','phone'];
    public static function index()
    {
        return self::all();
    }

    public static function showschools($id)
    {
        return self::find($id);
    }
    public function applies()
    {
        return $this->belongsToMany(Apply::class, 'applies', 'id_teacher_apply', 'id');
    }
}
