<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Pet;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultations = Consultation::all();
        return view ('admin.consultations.index', compact('consultations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $pets = Pet::all();
        $consultation = new Consultation();
        return view ('admin.consultations.create', compact('consultation', 'users', 'pets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Consultation::create($data);

        return redirect()->route('consultations.index')->with('success', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consultation)
    {
        $users = User::all();
        $pets = Pet::all();
        return view ('admin.consultations.show', compact('consultation', 'users', 'pets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultation $consultation)
    {
        $users = User::all();
        $pets = Pet::all();
        return view ('admin.consultations.edit', compact('consultation', 'users', 'pets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultation $consultation)
    {
        $data = $request->all();
        $consultation->update($data);

        return redirect()->route('consultations.index')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consultation)
    {
        $consultation->delete();

        return redirect()->route('consultations.index')->with('success', true);
    }
}