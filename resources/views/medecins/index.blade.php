@extends('layouts.appChef')

@section('content')
    <div class="container">
        <h1>Liste des Médecins</h1>
        <a href="{{ route('medecins.create') }}" class="btn btn-primary mb-3">Ajouter un Médecin</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <table class="table ">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Spécialité</th>
                <th>CIN</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th width="400px">Actions</th>
            </tr>
            @foreach ($medecins as $medecin)
            <tr>
                <td>{{ $medecin->id_m }}</td>
                <td>{{ $medecin->Nom_m }}</td>
                <td>{{ $medecin->Prenom_m }}</td>
                <td>{{ $medecin->specialite }}</td>
                <td>{{ $medecin->CIN_m }}</td>
                <td>{{ $medecin->Email_m }}</td>
                <td>{{ $medecin->Telephone }}</td>
                <td>
                    <form action="{{ route('medecins.destroy', $medecin->id_m) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('medecins.show', $medecin->id_m) }}">Voir</a>
                        <a href="{{ route('medecins.edit', $medecin->id_m) }}" class="btn btn-warning">Modifier</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce medecin ?')" >Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
