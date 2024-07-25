<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Médical</title>
    <link rel="stylesheet" href="{{ asset('css/acceuil.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css">
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btn_inscrire").addEventListener("click", function() {
                window.location.href = "{{ route('auth.registration') }}";
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("btn_connecter").addEventListener("click", function() {
                window.location.href = "{{ route('auth.login') }}";
            });
        });
    </script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const textH1 = "Bienvenue dans votre site médical";
            const textH2 = "Notre Équipe et Notre Travail";
            const welcomeId = document.getElementById('welcome-id');
            const teamId = document.getElementById('team-id');
            let indexH1 = 0;
            let indexH2 = 0;

            function typeLetterH1() {
                if (indexH1 < textH1.length) {
                    welcomeId.textContent += textH1.charAt(indexH1);
                    indexH1++;
                    setTimeout(typeLetterH1, 100); // Adjust the speed by changing the timeout value
                } else {
                    setTimeout(resetTextH1, 1000); // Wait for 1 second before resetting
                }
            }

            function resetTextH1() {
                welcomeId.textContent = '';
                indexH1 = 0;
                typeLetterH1();
            }

            function typeLetterH2() {
                if (indexH2 < textH2.length) {
                    teamId.textContent += textH2.charAt(indexH2);
                    indexH2++;
                    setTimeout(typeLetterH2, 100); // Adjust the speed by changing the timeout value
                } else {
                    setTimeout(resetTextH2, 1000); // Wait for 1 second before resetting
                }
            }

            function resetTextH2() {
                teamId.textContent = '';
                indexH2 = 0;
                typeLetterH2();
            }

            // Clear the text content initially
            welcomeId.textContent = '';
            teamId.textContent = '';
            typeLetterH1();
            setTimeout(typeLetterH2, 2000); // Start typing the second text after 2 seconds
        });
    </script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Medical">
            <span class="logo-name"> Ma médecine </span>
        </div>
        <ul class="nav-links">
            <li><a href="#accueil" class="menu">Accueil</a></li>
            <li><a href="#services" class="menu">Services</a></li>
            <li><a href="#docteurs" class="menu">Docteurs</a></li>
            <li><a href="#question" class="menu">Questions</a></li>
            <li><a href="#contact" class="menu">Contactez-nous</a></li>
        </ul>
        <div class="container mt-5">
            <div class="auth-buttons">
                <a href="{{ route('login') }}" class="btn auth-btn" id="btn_connecter">Login</a>
                <a href="{{ route('register') }}" class="btn auth-btn" id="btn_inscrire">Register</a>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="main-content">
        <section class="welcome-section" id="accueil">
            <div class="welcome-text">
                <h1 id="welcome-id">Bienvenue dans votre site médical</h1>
                <p>Explorez nos services pour une meilleure santé.</p>
            </div>
        </section>
    </div>

    <!-- Infos sur l'hôpital -->
    <section class="hospital-info animate" id="services">
        {{-- <div class="hospital-info1">
            <div class="info-box" id="1">
                <i class="fa-solid fa-heart-pulse"></i>
                <h2>Cardiologie</h2>
                <p>La cardiologie est la spécialité médicale qui étudie le cœur et les vaisseaux sanguins. Elle traite
                    les maladies cardiovasculaires telles que les maladies coronariennes, les troubles du rythme
                    cardiaque et les malformations cardiaques.</p>
            </div>
            <div class="info-box" id="2">
                <i class="fi fi-rs-ambulance"></i>
                <h2>Urgences</h2>
                <p>Les urgences sont dédiées à la prise en charge immédiate des patients souffrant de traumatismes
                    graves, d'accidents, ou de maladies nécessitant une intervention médicale rapide.</p>
            </div>
            <div class="info-box" id="3">
                <i class="fa-solid fa-flask-vial"></i>
                <h2>Laboratoire</h2>
                <p>Le laboratoire médical effectue des analyses cliniques pour diagnostiquer les maladies et évaluer
                    l'état de santé des patients. Il couvre des domaines comme l'hématologie, la microbiologie, la
                    biochimie, et l'immunologie.</p>
            </div>
        </div>
        <div class="hospital-info1">
            <div class="info-box" id="4">
                <i class="fa-solid fa-eye"></i>
                <h2>Ophtalmologie</h2>
                <p>L'ophtalmologie traite les maladies et les troubles de la vue, ainsi que les affections affectant les
                    yeux et les structures périoculaires.</p>
            </div>
            <div class="info-box" id="5">
                <i class="fi fi-rs-pulse"></i>
                <h2>Radiologie</h2>
                <p>La radiologie utilise des techniques d'imagerie médicale comme les rayons X, l'échographie et l'IRM
                    pour diagnostiquer les maladies et les traumatismes internes.</p>
            </div>
            <div class="info-box" id="6">
                <i class="fa-solid fa-tooth"></i>
                <h2>Dentisterie</h2>
                <p>La dentisterie se concentre sur la santé bucco-dentaire, le diagnostic et le traitement des maladies
                    et des conditions affectant les dents, les gencives et les structures environnantes.</p>
            </div>
        </div>
        <div class="hospital-info1">
            <div class="info-box" id="7">
                <i class="fa-solid fa-stethoscope"></i>
                <h2>Physiothérapie</h2>
                <p>La physiothérapie vise à restaurer le mouvement et la fonction chez les patients souffrant de
                    blessures musculo-squelettiques, de troubles neurologiques, ou après une chirurgie.</p>
            </div>
            <div class="info-box" id="8">
                <i class="fa-solid fa-notes-medical"></i>
                <h2>Médecine Générale</h2>
                <p>La médecine générale couvre une gamme variée de soins primaires et de services médicaux non
                    spécialisés, assurant la gestion globale de la santé des patients.</p>
            </div>
            <div class="info-box" id="9">
                <i class="fi fi-rs-head-side-brain"></i>
                <h2>Neurologie</h2>
                <p>La neurologie est la branche de la médecine qui étudie les troubles du système nerveux, y compris le
                    cerveau, la moelle épinière et les nerfs périphériques.</p>
            </div>
        </div> --}}
        <div class="hopital-services">
            <div class="info-service">
                <div class="head-service">
                    <i class="fa-solid fa-heart-pulse"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
            <div class="info-service">
                <div class="head-service">
                    <i class="fi fi-rs-ambulance"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
            <div class="info-service">
                <div class="head-service">
                    <i class="fa-solid fa-flask-vial"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
        </div>
        <div class="hopital-services">
            <div class="info-service">
                <div class="head-service">
                    <i class="fa-solid fa-eye"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
            <div class="info-service">
                <div class="head-service">
                    <i class="fa-solid fa-tooth"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
            <div class="info-service">
                <div class="head-service">
                    <i class="fa-solid fa-stethoscope"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
        </div>
        <div class="hopital-services">
            <div class="info-service">
                <div class="head-service">
                    <i class="fa-solid fa-notes-medical"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
            <div class="info-service">
                <div class="head-service">
                    <i class="fi fi-rs-pulse"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
            <div class="info-service">
                <div class="head-service">
                    <i class="fi fi-rs-head-side-brain"></i>
                    <h2>Services</h2>
                </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, maxime accusantium quod provident
                        totam repudiandae non fuga tempora minus commodi dolores nobis facilis, necessitatibus, expedita
                        a veritatis eaque in eveniet.
                    </p>
            </div>
        </div>
    </section>

    <section class="questions " id="question">
        <div class="questionContainer">
            <div class="question">
                <div class="icone ">
                    <img src="{{ asset('images/services.png') }}" alt="services">
                    <h3>Quels sont les services médicaux offerts par L'Hopital ?</h3>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet animi ipsam, amet repudiandae ut
                    debitis blanditiis. Eligendi consectetur odit ab deleniti, excepturi molestiae ullam officia
                    aspernatur fugit voluptate, obcaecati quo?</p>
            </div>

            <div class="question">
                <div class="icone">
                    <img src="{{ asset('images/rend.png') }}" alt="services">
                    <h3>Comment puis-je prendre rendez-vous avec un médecin ou une téleconsultation ?</h3>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem velit molestias veniam, deleniti
                    officia eius aliquid ab minus voluptate cum, facere expedita excepturi, ex maxime explicabo vero
                    dolorum? Rem, mollitia.</p>
            </div>
            <div class="question">
                <div class="icone">
                    <img src="{{ asset('images/horaires.png') }}" alt="services">
                    <h3>Quels sont vos horaires d'ouverture ?</h3>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur beatae maxime iusto, dolorem
                    optio nesciunt corporis labore. Praesentium distinctio voluptas porro quaerat beatae quam
                    accusantium voluptates tenetur, vitae magni error.</p>
            </div>
            <div class="question">
                <div class="icone ">
                    <img src="{{ asset('images/asssurance.png') }}" alt="services">
                    <h3>Acceptez-vous les assurances santé et quelles sont-elles ?</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quos eum ducimus ab sit ea,
                    repudiandae iste porro placeat quibusdam est temporibus, ut, fugiat aliquam vel et atque distinctio
                    praesentium?</p>
            </div>
        </div>
    </section>
    <section>

    </section>
    <!-- Image des médecins et description -->
    <section class="team-section animate" id="docteurs">
        <div class="team-description">
            <h2 id="team-id">Notre Équipe et Notre Travail</h2>
            <p>Une description sur le travail d'équipe et la fiabilité dans notre hôpital Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Est aut voluptatum amet consequuntur laborum, id veritatis sunt deserunt
                necessitatibus, inventore vel animi debitis similique, sapiente molestias sit natus numquam impedit!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus suscipit officiis voluptatum ad
                aperiam illo sint nulla enim quo nisi! Nobis quos ratione quam quibusdam recusandae illo natus assumenda
                expedita! Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ipsum enim nam eum molestias sint
                culpa quis reiciendis quibusdam facere adipisci ab perferendis, id ut doloremque? Nihil ad quae
                voluptas.</p>
        </div>
        <div class="team-image">
            <img src="{{ asset('images/team.jpg') }}" alt="Équipe médicale">
        </div>
    </section>


    <!-- Section Contact -->
    <section class="contact animate" id="contact">
        <div class="headform">
            <img src="{{ asset('images/logo.png') }}" alt="">
            <h1>Contactez nous </h1>
        </div>
        <form action="#" method="post">
            @csrf
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Sujet:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Envoyer le Message</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-logo animate">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Medical">
            <span class="logo-name">Ma médecine</span>
        </div>
        <div class="footer-content">
            <div class="info">
                <div class="hospital-info">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>123 Rue de l'Hôpital Fes, Maroc</p>
                    <i class="fa-solid fa-envelope"></i>
                    <p>Email: contact@votrehopital.com</p>
                    <i class="fa-solid fa-phone"></i>
                    <p>Téléphone: +1234567890</p>
                </div>
                <div class="hospital-other">
                    <ul>
                        <li><a href="#acceuil">Acceuil</a></li>
                        <li><a href="">More information</a></li>
                        <li><a href="">Documents utiles</a></li>
                        <li><a href="">Prendre un rendez vous facile</a></li>
                    </ul>
                </div>
                <div class="hospital-other">
                    <ul>
                        <li><a href="#acceuil">Acceuil</a></li>
                        <li><a href="">More information</a></li>
                        <li><a href="">Documents utiles</a></li>
                        <li><a href="">Prendre un rendez vous facile</a></li>
                    </ul>
                </div>
                <div class="hospital-other">
                    <ul>
                        <li><a href="#acceuil">Acceuil</a></li>
                        <li><a href="">More information</a></li>
                        <li><a href="">Documents utiles</a></li>
                        <li><a href="">Prendre un rendez vous facile</a></li>
                    </ul>
                </div>

            </div>
            <div class="social-links">
                <h3>Retrouvez-nous sur les Réseaux Sociaux</h3>
                <div class="social-icons">
                    <a href="https://facebook.com/votrepage" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://twitter.com/votrepage" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://linkedin.com/votrepage" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com/votrepage" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>&copy; 2024 Votre Hôpital. Tous droits réservés.</p>
            <a
                href="https://www.google.com/maps/search/localisation+centre+el+ghassani+fes+maroc/@34.0409533,-5.0045955,15.02z?entry=ttu">Trouvez-nous
                sur la carte de Localisation</a> <!-- Lien vers votre carte de position -->
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-c5h5voUjQk0a1q74b5vW6vKs3vWPOdN8TAr2G6fl6cNg1C0eZrGGSoN1dCDGQWVNScc6z7Qw4B2C1BYUZt2c7g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const observerOptions = {
                root: null,
                rootMargin: "0px",
                threshold: 0.1
            };

            function handleIntersect(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target);
                    }
                });
            }

            const observer = new IntersectionObserver(handleIntersect, observerOptions);

            document.querySelectorAll('.animate').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>

</html>
