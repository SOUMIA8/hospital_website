<!-- show.blade.php -->

@extends('layouts.appChef')

@section('content')
    <div class="container">
        <h1>Détails du Médecin</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nom : {{ $medecin->Nom_m }}</h5>
                <p class="card-text">Prénom : {{ $medecin->Prenom_m }}</p>
                <p class="card-text">Spécialité : {{ $medecin->specialite }}</p>
                <p class="card-text">CIN : {{ $medecin->CIN_m }}</p>
                <p class="card-text">Email : {{ $medecin->Email_m }}</p>
                <p class="card-text">Téléphone : {{ $medecin->Telephone }}</p>
                <a href="{{ route('medecins.edit', $medecin->id_m) }}" class="btn btn-primary">Modifier</a>
            </div>
        </div>
    </div>
@endsection
