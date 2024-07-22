@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails du Rendez-vous</h2>
        <p><strong>Date et Heure :</strong> {{ $appointment->Date_heure_ }}</p>
        <p><strong>Patient :</strong> {{ $appointment->nom_patient_}} {{ $appointment->prenom_patient_}}</p>
        <p><strong>Médecin :</strong> {{ $appointment->nom_medecin_ }}</p>
        <p><strong>Secrétaire :</strong> {{ $appointment->nom_secretaire_ }}</p>
        <p><strong>Acte :</strong> {{ $appointment->nom_acte_ }}</p>
        <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Retour à la liste des rendez-vous</a>
    </div>
@endsection


{{--
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails du Rendez-vous</h2>
        <p><strong>Date et Heure :</strong> {{ $appointment->Date_heure_ }}</p>

        @if ($appointment->patient)
            <p><strong>Patient :</strong> {{ $appointment->patient->Nom_p }} {{ $appointment->patient->Prenom_p }}</p>
        @else
            <p><strong>Patient :</strong> Non spécifié</p>
        @endif

        @if ($appointment->medecin)
            <p><strong>Médecin :</strong> {{ $appointment->medecin->Nom_m }} {{ $appointment->medecin->Prenom_m }}</p>
        @else
            <p><strong>Médecin :</strong> Non spécifié</p>
        @endif

        <p><strong>Secrétaire :</strong> {{ $appointment->nom_secretaire_ }}</p>
        <p><strong>Acte :</strong> {{ $appointment->nom_acte_ }}</p>

        <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Retour à la liste des rendez-vous</a>
    </div>
@endsection --}}
