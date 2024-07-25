<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <div class="row">
                    <div class="col-md-11">
                        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                            <img src="{{ asset('images/logo.png') }}" alt="BootstrapBrain Logo" width="300"
                                style="width: 100px; height: 100px;">
                        </a>
                    </div>
                    <div class="col-md-1">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">

                    @session('success')
                        <div class="alert alert-success" role="alert">
                            {{ $value }}
                        </div>
                    @endsession

                    <h1 class="display-5 fw-bold">Patient {{ auth()->user()->name }}</h1>
                    <p class="col-md-8 fs-4">Bienvenue sur la page de connexion Ma Médecine.<br />Votre plateforme dédiée à la gestion de vos rendez-vous et consultations
                        médicales. Accédez facilement à vos informations médicales et bénéficiez d'un suivi personnalisé
                        grâce à notre interface intuitive et sécurisée.
                    </p>
                    <a href="{{ route('request.index') }}" class="btn btn-primary btn-lg">Demander</a>

                </div>
            </div>

        </div>
    </main>

</body>

</html>
