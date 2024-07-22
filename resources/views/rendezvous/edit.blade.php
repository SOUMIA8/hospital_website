@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier le Rendez-vous</h2>
        <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Date_heure">Date et Heure :</label>
                <input type="datetime-local" id="Date_heure" name="Date_heure_" class="form-control" value="{{ $appointment->Date_heure_ }}" required>
            </div>
            <div class="form-group">
                <label for="nom_patient_">Patient :</label>
                <select id="nom_patient_" name="nom_patient_" class="form-control" required>
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->Nom_p }} {{ $patient->Prenom_p }}" {{ $appointment->nom_patient_ == $patient->Nom_p ? 'selected' : '' }}>{{ $patient->Nom_p }} {{ $patient->Prenom_p }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nom_medecin_">Médecin :</label>
                <select id="nom_medecin_" name="nom_medecin_" class="form-control" required>
                    @foreach ($medecins as $medecin)
                        <option value="{{ $medecin->Nom_m }} {{ $medecin->Prenom_m }}" {{ $appointment->nom_medecin_ == $medecin->Nom_m ? 'selected' : '' }}>{{ $medecin->Nom_m }} {{ $medecin->Prenom_m }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Ajouter d'autres champs comme nécessaires -->
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
