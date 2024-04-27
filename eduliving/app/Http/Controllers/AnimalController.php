<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\User_Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $user_animals = User_Animal::where('user_id', $user_id)->get();
         return view('admin.animal', compact('user_animals'));
    }

    public function showgaleri()
    {
        $user_id = Auth::id();
        $user_animals = User_Animal::where('user_id', $user_id)->get();
         return view('galeri', compact('user_animals'));
    }
}


