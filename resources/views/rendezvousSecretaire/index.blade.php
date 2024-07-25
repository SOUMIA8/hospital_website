
@extends('layouts.appSecretaire')

@section('content')
    <div class="container">
        <h2>Liste des Rendez-vous</h2>

        <!-- Formulaire de recherche -->
        <form action="{{ route('appointments.index') }}" method="GET" class="mb-3">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="date_heure">Date et Heure</label>
                    <input type="datetime-local" id="date_heure" name="date_heure" class="form-control" value="{{ request()->input('date_heure') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="nom_patient">Patient</label>
                    <input type="text" id="nom_patient" name="nom_patient" class="form-control" value="{{ request()->input('nom_patient') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="nom_medecin">Médecin</label>
                    <input type="text" id="nom_medecin" name="nom_medecin" class="form-control" value="{{ request()->input('nom_medecin') }}">
                </div>
                <div class="form-group col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary" style="font-weight: 600">Rechercher</button>
                </div>
            </div>
        </form>

        <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3" style="font-weight: 600">Ajouter un Rendez-vous</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date et Heure</th>
                    <th>Patient</th>
                    <th>Médecin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $rdv)
                    <tr>
                        <td>{{ $rdv->Date_heure_ }}</td>
                        <td>{{ $rdv->nom_patient_ }}</td>
                        <td>{{ $rdv->nom_medecin_ }}</td>
                        <td>
                            <a href="{{ route('appointments.show', $rdv->id) }}" class="btn btn-info ">Voir</a>
                            <a href="{{ route('appointments.edit', $rdv->id) }}" class="btn btn-warning ">Modifier</a>

                            <!-- Formulaire de suppression -->
                            <form action="{{ route('appointments.destroy', $rdv->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce rendez-vous ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="height: 38px;">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
