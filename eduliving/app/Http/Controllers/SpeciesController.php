<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorespeciesRequest;
use App\Http\Requests\UpdatespeciesRequest;
use App\Models\species;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorespeciesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(species $species)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(species $species)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatespeciesRequest $request, species $species)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(species $species)
    {
        //
    }
}
