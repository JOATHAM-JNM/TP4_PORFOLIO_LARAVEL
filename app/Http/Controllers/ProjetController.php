<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        return view('projets.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string',
            'technologie1' => 'nullable|string',
            'technologie2' => 'nullable|string',
            'technologie3' => 'nullable|string',
        ]);

        Projet::create($request->all());
        return redirect()->route('projets.index')->with('success', 'Projet créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $projet = Projet::findOrFail($id);
        return view('projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projet = Projet::findOrFail($id);
        return view('projets.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|string',
            'technologie1' => 'nullable|string',
            'technologie2' => 'nullable|string',
            'technologie3' => 'nullable|string',
        ]);

        $projet = Projet::findOrFail($id);
        $projet->update($request->all());
        return redirect()->route('projets.index')->with('success', 'Projet mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();
        return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès');
    }
}
