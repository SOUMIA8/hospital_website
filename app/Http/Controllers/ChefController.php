<?php

namespace App\Http\Controllers;
use App\Models\Medecin;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function index()
    {
        $medecins = Medecin::all();   //paginate(10) to display just 10 doctors in the db
        return view('medecins.index', compact('medecins'));
    }

    public function create()
    {
        return view('medecins.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nom_m' => 'required|string',
            'Prenom_m' => 'required|string',
            'specialite' => 'required|string',
            'CIN_m' => 'required|string',
            'Email_m' => 'required|email|unique:medecin',
            'Telephone' => 'required|string',
        ]);

        Medecin::create($validatedData);

        return redirect()->route('medecins.index')->with('success', 'Médecin créé avec succès.');
    }

    public function show($id)
    {
        $medecin = Medecin::findOrFail($id);
        return view('medecins.show', compact('medecin'));
    }

    public function edit($id)
    {
        $medecin = Medecin::findOrFail($id);
        return view('medecins.edit', compact('medecin'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Nom_m' => 'required|string',
            'Prenom_m' => 'required|string',
            'specialite' => 'required|string',
            'CIN_m' => 'required|string',
            'Email_m' => 'required|email|unique:medecin,Email_m,' . $id,
            'Telephone' => 'required|string',
        ]);

        $medecin = Medecin::findOrFail($id);
        $medecin->update($validatedData);

        return redirect()->route('medecins.index')->with('success', 'Médecin mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $medecin = Medecin::findOrFail($id);
        $medecin->delete();

        return redirect()->route('medecins.index')->with('success', 'Médecin supprimé avec succès.');
    }
}
