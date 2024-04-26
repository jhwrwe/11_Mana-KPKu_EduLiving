<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'courses', 'criteria', 'aboutcourse','image'];

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
        return $this->belongsToMany(Apply::class, 'applies', 'id_school_apply', 'id');
    }
}
