<?php

namespace App\Http\Controllers;

use App\Models\Strain;
use Illuminate\Http\Request;

class StrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $strains = Strain::all();
        return view('menu', ['strains' => $strains]);
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'strain' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'tier' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]); 
        
        $picturePath = $request->file('picture')->store('strains', 'public');

        Strain::create([
            'strain' => $validatedData['strain'],
            'price' => $validatedData['price'],
            'type' => $validatedData['type'],
            'tier' => $validatedData['tier'],
            'picture' => $picturePath,
        ]);

        return redirect()->route('add-item')->with('success', 'Strain added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
