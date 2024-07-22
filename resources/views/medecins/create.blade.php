@extends('layouts.appChef')

@section('content')
    <div class="container">
        <h1>Ajouter un Médecin</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('medecins.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nom_m">Nom :</label>
                <input type="text" class="form-control" id="Nom_m" name="Nom_m" required>
            </div>
            <div class="form-group">
                <label for="Prenom_m">Prénom :</label>
                <input type="text" class="form-control" id="Prenom_m" name="Prenom_m" required>
            </div>
            <div class="form-group">
                <label for="specialite">Spécialité :</label>
                <input type="text" class="form-control" id="specialite" name="specialite" required>
            </div>
            <div class="form-group">
                <label for="CIN_m">CIN :</label>
                <input type="text" class="form-control" id="CIN_m" name="CIN_m" required>
            </div>
            <div class="form-group">
                <label for="Email_m">Email :</label>
                <input type="email" class="form-control" id="Email_m" name="Email_m" required>
            </div>
            <div class="form-group">
                <label for="Telephone">Téléphone :</label>
                <input type="text" class="form-control" id="Telephone" name="Telephone" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
