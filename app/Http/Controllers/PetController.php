<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pet::all();
        return view ('admin.pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pet = new Pet();
        return view ('admin.pets.create', compact('pet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        Pet::create($data);

        return redirect()->route('pets.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view ('admin.pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view ('admin.pets.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $data = $request->all();
        $pet->update($data);

        return redirect()->route('pets.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();

        return redirect()->route('pets.index')->with('success', true);
    }
}
