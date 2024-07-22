@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un Rendez-vous</h2>
        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Date_heure_">Date et Heure :</label>
                <input type="datetime-local" name="Date_heure_" id="Date_heure_" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nom_patient_">Patient :</label>
                <select name="nom_patient_" id="nom_patient_" class="form-control" required>
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->Nom_p }} {{ $patient->Prenom_p }}">{{ $patient->Nom_p }} {{ $patient->Prenom_p }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nom_medecin_">Médecin :</label>
                <select name="nom_medecin_" id="nom_medecin_" class="form-control" required>
                    <option value="ranya">Ranya</option>
                    <option value="soumia">Soumia</option>
                    <option value="saad">Saad</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nom_secretaire_">Secrétaire :</label>
                <select name="nom_secretaire_" id="nom_secretaire_" class="form-control" required>
                    <option value="hiba">Hiba</option>
                    <option value="hind">Hind</option>
                    <option value="ahmed">Ahmed</option>
                    <option value="aya">Aya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nom_acte_">Acte (optionnel) :</label>
                <select name="nom_acte_" id="nom_acte_" class="form-control">
                    <option value="">Sélectionnez un acte</option>
                    @foreach ($actes as $acte)
                        <option value="{{ $acte->description }}">{{ $acte->description }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter Rendez-vous</button>
        </form>
    </div>
@endsection
