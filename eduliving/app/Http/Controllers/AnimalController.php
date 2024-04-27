<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Species;

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
    public function AllAnimals()
    {
         $animalls = Animal::all();
         return view('admin.view_allanimals', compact('animalls'));
    }
 

    public function gallery($species)
    {
        // Ambil ID spesies mamalia
        $mamaliaId = Species::where('species_name', $species)->value('id');
    
        // Ambil ID pengguna saat ini
        $userId = Auth::id();
    
        // Ambil hewan mamalia yang dimiliki oleh pengguna saat ini
        $animals = Animal::where('species_id', $mamaliaId)
                        ->whereHas('userAnimal', function ($query) use ($userId) {
                            $query->where('user_id', $userId);
                        })
                        ->get();
    
        return view('galeri', compact('animals'));
    }

    public function detail($species, $id)
    {
        $animal = Animal::findOrFail($id);
        return view('detail', compact('animal'));
    }
    public function delete(Animal $animal){
        $animal->delete();
        $animalls = Animal::all();
        return view('admin.view_allanimals',compact('animalls'));
    }
}


