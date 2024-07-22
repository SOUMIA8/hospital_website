@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Rendez-vous</h2>
        <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">Ajouter un Rendez-vous</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Date et Heure</th>
                    <th>Patient</th>
                    <th>Médecin</th>
                    <th>Secrétaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->Date_heure_ }}</td>
                        <td>{{ $appointment->nom_patient_ }}</td>
                        <td>{{ $appointment->nom_medecin_ }}</td>
                        <td>{{ $appointment->nom_secretaire_ }}</td>
                        <td>
                            <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rendez-vous ?')" style="height:38px">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
