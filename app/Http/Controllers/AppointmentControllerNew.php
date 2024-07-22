<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Appo;
use App\Models\Patient;
use App\Models\Medecin;
use App\Models\Acte;


class AppointmentControllerNew extends Controller
{
    // Afficher la liste des rendez-vous
    public function index()
    {
        $appointments = Appo::all();
        return view('rendezvous.index', compact('appointments'));
    }

    // Afficher le formulaire de création d'un rendez-vous
    public function create()
    {
        $actes = Acte::all();
        $patients = Patient::all();
        return view('rendezvous.create', compact('actes', 'patients'));
    }

    // Enregistrer un nouveau rendez-vous
    public function store(Request $request)
    {
        $request->validate([
            'Date_heure_' => 'required|date',
            'nom_patient_' => 'required|string',
            'nom_medecin_' => 'required|string',
            'nom_secretaire_' => 'required|string',
            'nom_acte_' => 'required|string',
        ]);

        Appo::create([
            'Date_heure_' => $request->input('Date_heure_'),
            'nom_patient_' => $request->input('nom_patient_'),
            'nom_medecin_' => $request->input('nom_medecin_'),
            'nom_secretaire_' => $request->input('nom_secretaire_'),
            'nom_acte_' => $request->input('nom_acte_'),
        ]);

        return redirect()->route('appointments.index')->with('success', 'Rendez-vous créé avec succès.');
    }

    // Afficher un rendez-vous spécifique
    public function show($id)
    {
        $appointment = Appo::findOrFail($id);
        // dd($appointment->patient, $appointment->medecin);
        return view('rendezvous.show', compact('appointment'));
    }

    // Afficher le formulaire de modification d'un rendez-vous
    public function edit($id)
    {
        $appointment = Appo::findOrFail($id);
        $actes = Acte::all(); // Ajouter pour afficher les actes dans le formulaire d'édition
        $patients = Patient::all(); // Ajouter pour afficher les patients dans le formulaire d'édition
        $medecins = Medecin::all();
        return view('rendezvous.edit', compact('appointment', 'actes', 'patients','medecins'));
    }

    // Mettre à jour un rendez-vous
    public function update(Request $request, $id)
    {
        $request->validate([
            'Date_heure_' => 'required|date',
            'nom_patient_' => 'required|string',
            'nom_medecin_' => 'required|string',
            'nom_secretaire_' => 'required|string',
            'nom_acte_' => 'required|string',
        ]);

        $appointment = Appo::findOrFail($id);
        $appointment->update([
            'Date_heure_' => $request->input('Date_heure_'),
            'nom_patient_' => $request->input('nom_patient_'),
            'nom_medecin_' => $request->input('nom_medecin_'),
            'nom_secretaire_' => $request->input('nom_secretaire_'),
            'nom_acte_' => $request->input('nom_acte_'),
        ]);

        return redirect()->route('appointments.index')->with('success', 'Rendez-vous mis à jour avec succès.');
    }

    // Supprimer un rendez-vous
    public function destroy($id)
    {
        $appointment = Appo::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Rendez-vous supprimé avec succès.');
    }
}