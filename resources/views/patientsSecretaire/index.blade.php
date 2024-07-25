<!-- resources/views/patients/index.blade.php -->

@extends('layouts.appSecretaire')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-30">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-patients" role="tabpanel" aria-labelledby="v-pills-patients-tab">
                    <h2>Liste des Patients</h2>
                    <!-- Formulaire de recherche -->
                    <form action="{{ route('patients.index') }}" method="GET" class="search-form">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="nom">Nom</label>
                                <input type="text" id="nom" name="nom" class="form-control" value="{{ request()->input('nom') }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="prenom">Prénom</label>
                                <input type="text" id="prenom" name="prenom" class="form-control" value="{{ request()->input('prenom') }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="adresse">Adresse</label>
                                <input type="text" id="adresse" name="adresse" class="form-control" value="{{ request()->input('adresse') }}">
                            </div>
                            {{-- <div class="form-group col-md-2">
                                <label for="date_naissance">Date de Naissance</label>
                                <input type="date" id="date_naissance" name="date_naissance" class="form-control" value="{{ request()->input('date_naissance') }}">
                            </div> --}}
                            <div class="form-group col-md-2">
                                <label for="sexe">Sexe</label>
                                <select id="sexe" name="sexe" class="form-control">
                                    <option value="">Tous</option>
                                    <option value="M" {{ request()->input('sexe') == 'M' ? 'selected' : '' }}>Homme</option>
                                    <option value="F" {{ request()->input('sexe') == 'F' ? 'selected' : '' }}>Femme</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telephone">Téléphone</label>
                                <input type="text" id="telephone" name="telephone" class="form-control" value="{{ request()->input('telephone') }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{ request()->input('email') }}">
                            </div>
                            <div class="form-group col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary">Rechercher</button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Ajouter un Patient</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Date de Naissance</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                {{-- <th>Situation Familiale</th> --}}
                                <th>ID Assurance</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->id_p }}</td>
                                    <td>{{ $patient->Nom_p }}</td>
                                    <td>{{ $patient->Prenom_p }}</td>
                                    <td>{{ $patient->Adresse_p }}</td>
                                    <td>{{ $patient->Date_Naissance_p }}</td>
                                    <td>{{ $patient->Sexe_p }}</td>
                                    <td>{{ $patient->Telephone_p }}</td>
                                    <td>{{ $patient->Email_p }}</td>
                                    {{-- <td>{{ $patient->Situation_Familiale }}</td> --}}
                                    <td>{{ $patient->id_imm_assurance }}</td>
                                    <td>
                                        <div style="display: flex; gap: 6px; align-items: center;">
                                        <a href="{{ route('patients.show', $patient->id_p) }}" class="btn btn-info " style="height: 38px; font-weight:700">Voir</a>
                                        <a href="{{ route('patients.edit', $patient->id_p) }}" class="btn btn-warning " style="height: 38px; font-weight:700 ;color:#ffff;">Modifier</a>
                                        <form action="{{ route('patients.destroy', $patient->id_p) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient?')" style="height: 38px; font-weight:700">Supprimer</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Autres onglets (Rendez-vous, Factures, Rapports) à compléter -->
            </div>
        </div>
    </div>
</div>


@endsection
