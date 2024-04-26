<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'title', 'date', 'major','image','description'];

    public static function index()
    {
        return self::all();
    }

    public static function showschools($id)
    {
        return self::find($id);
    }
}
