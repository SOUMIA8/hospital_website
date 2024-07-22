@extends('layouts.appChef')

@section('content')
    <div class="container">
        <h1>Modifier un Médecin</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('medecins.update', $medecin->id_m) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Nom_m">Nom :</label>
                <input type="text" class="form-control" id="Nom_m" name="Nom_m" value="{{ $medecin->Nom_m }}">
            </div>
            <div class="form-group">
                <label for="Prenom_m">Prénom :</label>
                <input type="text" class="form-control" id="Prenom_m" name="Prenom_m" value="{{ $medecin->Prenom_m }}">
            </div>
            <div class="form-group">
                <label for="specialite">Spécialité :</label>
                <input type="text" class="form-control" id="specialite" name="specialite" value="{{ $medecin->specialite }}">
            </div>
            <div class="form-group">
                <label for="CIN_m">CIN :</label>
                <input type="text" class="form-control" id="CIN_m" name="CIN_m" value="{{ $medecin->CIN_m }}">
            </div>
            <div class="form-group">
                <label for="Email_m">Email :</label>
                <input type="email" class="form-control" id="Email_m" name="Email_m" value="{{ $medecin->Email_m }}">
            </div>
            <div class="form-group">
                <label for="Telephone">Téléphone :</label>
                <input type="text" class="form-control" id="Telephone" name="Telephone" value="{{ $medecin->Telephone }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
