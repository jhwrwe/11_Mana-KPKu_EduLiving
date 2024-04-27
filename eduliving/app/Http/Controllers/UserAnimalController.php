<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUser_AnimalRequest;
use App\Http\Requests\UpdateUser_AnimalRequest;
use App\Models\Species;
use App\Models\User_Animal;
use App\Models\Animal;

class UserAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function gachaAnimal($species)
    {
        $speciesId = Species::where('species_name', $species)->value('id');
    
        $animals = Animal::where('species_id', $speciesId)
                        ->whereNotIn('id', function ($query) {
                            $query->select('animal_id')
                                ->from('user__animals')
                                ->where('user_id', Auth::id());
                        })
                        ->get();
    
        $randomAnimal = $animals->random();
    
        $userAnimal = User_Animal::create([
            'user_id' => Auth::id(),
            'animal_id' => $randomAnimal->id
        ]);
    
        return view('/home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUser_AnimalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User_Animal $user_Animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_Animal $user_Animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUser_AnimalRequest $request, User_Animal $user_Animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

}
