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
    
    // Ambil semua hewan yang dimiliki oleh pengguna yang sedang diautentikasi
    $user_animals = User_Animal::where('user_id', $user_id)->get();
    
        $user_animals->load('animal');
    $animals = $user_animals->animal;

    return view('admin.animal', compact('animals'));
    }
    

}
