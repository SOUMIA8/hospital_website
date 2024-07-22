<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div class="espaceAdmin">
        <img src="{{ asset('images/logo.png') }}" alt="logo">
        <p id="adminText">Espace d'Hospitalisation</p>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/onlineRDV.png') }}" class="card-img-top" alt="rdv">
                    <div class="card-body">

                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nihil exercitationem fugit, illo unde tempora labore eius voluptatem inventore quibusdam id sed nam enim corrupti velit quos nesciunt similique aperiam?</p>
                        <a href="{{ route('online.rendForm') }}" class="btn btn-primary">Demander un RDV en ligne</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/teleconsultation.jpg') }}" class="card-img-top" alt="teleconsultation" id="imgT">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, commodi nulla aspernatur magni dolor tempora eveniet maxime quo eius officia illo beatae expedita aut aliquid, omnis facere voluptatibus possimus</p>
                        <a href="{{ route('doctors.index') }}" class="btn btn-primary">Demander une téléconsultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
