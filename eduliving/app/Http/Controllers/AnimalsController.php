<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use App\Http\Requests\StoreAnimalsRequest;
use App\Http\Requests\UpdateAnimalsRequest;

class AnimalsController extends Controller
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
    public function store(StoreAnimalsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Animals $animals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animals $animals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalsRequest $request, Animals $animals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animals $animals)
    {
        //
    }
}
