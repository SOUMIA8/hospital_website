<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div class="espaceAdmin">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
        <p id="adminText">Espace Administrateur</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/secretaire.jpg') }}" class="card-img-top" alt="Image Secrétaire Médical">
                    <div class="card-body">
                        <h5 class="card-title">Secrétaire Médical</h5>
                        <p class="card-text">Accédez aux fonctionnalités destinées aux secrétaires médicaux, la gestion des RDV ,les patients et la facturisation.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Allez à la page Secrétaire</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/med.jpg') }}" class="card-img-top" alt="Image Médecin">
                    <div class="card-body">
                        <h5 class="card-title">Médecin</h5>
                        <p class="card-text">Accédez aux fonctionnalités destinées aux médecins, la consultation des dossiers patients et la planification des traitements.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Aller à la page Médecin</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/medecinn.jpg') }}" class="card-img-top" alt="Image Chef Médecin" id="imgC">
                    <div class="card-body">
                        <h5 class="card-title">Chef Médecin</h5>
                        <p class="card-text">Accédez aux fonctionnalités destinées au chef médecin, la supervision des activités médicales, la gestion des équipes médicales.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Aller à la page Chef Médecin</a>
                    </div>
                </div>
            </div>
        </dv>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- In the same HTML file, before closing the </body> tag -->
<!-- In the same HTML file, before closing the </body> tag -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const textElement = document.getElementById("adminText");
        const text = textElement.textContent;
        textElement.textContent = "";
        textElement.style.opacity = 1; // Make the text element visible

        let index = 0;
        function typeLetter() {
            if (index < text.length) {
                textElement.textContent += text.charAt(index);
                index++;
                setTimeout(typeLetter, 100); // Adjust the speed here
            } else {
                setTimeout(() => {
                    textElement.textContent = "";
                    index = 0;
                    typeLetter();
                }, 1000); // Pause before repeating the animation
            }
        }

        typeLetter();
    });
</script>


</body>
</html>
