<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>acceil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('./assets/css/main.css') }}">
</head>
  <body>
 <!-- header -->
 <div class="header">
        <!-- header-black -->
        <div class="header-black">
            <a href="" class="mail-link">
                <img src="./assets/images/nouvelle-enveloppe-de-courrier-electronique.png" class="enveloppe "
                    alt="enveloppe electronique">
            </a>
            <img src="./assets/images/whatsapp.png" class="enveloppe" alt="whatsapp">
            <div class="">
                <p class="header-black-contact">Contactez nous</p>
            </div>

        </div>
        <!-- end header-black -->

        <!-- navbar -->

        <div class="header-nav">
            <div class="logo-background d-flex  ">
                <img src="./assets/images/logo.png" class="logo mt-1" alt="whatsapp">
                <span style="color: #00CCFF;" class="fs-5 mt-1">KNOWLEDGE</span> <span
                    style="color: #7CF4E7; margin-left: 3%;" class="fs-5 mt-1">TECHNOLOGY</span>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link active text-light p-5" href="{{ route('acceuil') }}">Accueil</a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link  active text-light p-5" href="{{ route('formation') }}">Formation</a>
                            </li>

                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    
                            <li class="nav-item">
                                <a class="nav-link  active text-light p-5" href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="block-image-accueil">
                <img src="/assets/images/2-blackstudent.jpeg" class="imag-invisible img-fluid" alt="Etudiants">
                <div class="text-accueil">
                    <div class="text">
                        <p class="text-light text-center">CENTRE DE FORMATION QUI REPOND</p>
                        <p class="text-light text-center">CENTRE DE FORMATION QUI REPOND</p>

                        <p class="text-light text-center"> </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- accueil -->
        <div class="accueil">
            <div class="text-accueil">
                <div class="text">
                    <p class="text-light text-center">CENTRE DE FORMATION QUI REPOND</p>
                    <p class="text-light text-center">AUX EXIGENCES DE L'HEURE ! </p>
                </div>
            </div>
        </div>
        <!-- end-accueil -->
        <!--end navbar -->

    </div>
    <!-- end-header -->

    <!-- Notre centre de formation -->

    <div class="centre-formation">
        <h1 class="text-center mt-5">Notre centre de formation:</h1>

        <div class="container">
            <div class="knowledgetchnology mt-5">
                <div class="propos-de-nous">
                    <h3 class="p-3">QUELQUES MOTS SUR NOUS</h3>
                    <p class="p-2">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui
                    </p>
                </div>

                <div class="nos-connaissances mt-3">
                    <h3>DE LARGES CONNAISSANCES</h3>
                    <div class="ligne-bleu">
                        <p style="display: none;">bleu</p>
                    </div>
                    <p>Afin de répondre à toutes vos demandes, notre équipe expérimentée, proposent de nombreux
                        services. Depuis plus de 20 ans nous avons pu développer de nouvelles compétences et avons
                        obtenu de solides connaissances en informatique.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end-Notre centre de formation -->

    <!-- NOS DISPOSITIFS POUR LA FORMATION -->

    <div class="dispositif">
        <h1 class="text-center my-5">NOS DISPOSITIFS POUR LA FORMATION</h1>
    </div>
    <div class=" my-5">
        <div class="text-center">
            <img src="./assets/images/computers.jpeg" class="computer rounded" alt="...">
        </div>
    </div>
    <!--end-NOS DISPOSITIFS POUR LA FORMATION -->

    <!-- materiel -->
    <div class="interview mt-5">
        <p class="text-center text-light fs-1" style="margin-top: 5%;">“Nous mettons à la disposition des apprenants du
            matériel adequat pour la reussite de la formation ........”</p>
    </div>

    <div class="">
        <div class="images-disposiifs container">
            <div class="">
                <img src="./assets/images/Aspirateur-souffleur.jpeg" class="aspirateur" width="450" height="200" alt="">
            </div>
            <div class=" p-2">
                <img src="./assets/images/pince-sertire.jpeg" class="aspirateur" width="450" height="200" alt="">
            </div>
            <div class="p-2">
                <img src="./assets/images/caisse-outils.png" class="aspirateur" width="450" height="200" alt="">
            </div>
        </div>
    </div>

    <!-- end-materiel -->

    <!-- image-etudiant -->
    <div class="image-etudiant">
        <!-- <img src="./assets/images/image-etudiant.webp" class="image-etudiant" alt=""> -->
        <div class="card">
            <div class="card m-5">
                <div class="card-header">
                    <h3>bbbbbbbbbbb</h3>
                </div>
                <div class="card-body">
                    <p class="text-light fs-6">
                        Lorem ipsum dolor sit amet. Et nobis galisum sed atque unde est nihil accusantium est assumenda
                        fuga hic nostrum quas eum quas vitae et odit consequuntur? Id voluptas rerum et blanditiis sint
                        ut delectus ducimus qui maxime aliquid ea nulla sequi 33 minima quibusdam? Ut nihil optio eum
                        corporis enim qui alias illo qui reiciendis voluptas aut voluptatem debitis. Eum dolore amet
                        autem numquam qui perspiciatis neque ea inventore unde sit odio omnis ut repellendus repellendus
                        qui commodi nulla.

                        Et voluptas dolore et earum aperiam sit illum voluptatem. Qui nulla iusto aut voluptatem
                        internos ut numquam consequatur aut omnis vero ex molestiae reprehenderit aut fugiat velit. Ut
                        explicabo quia quia illum qui minus praesentium qui tenetur omnis non quam voluptatem.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--end-image-etudiant -->

    <!-- google map google-map-newsletter container-fluid -->
    <div class=" row  mt-3">
        <div class="col-12 col-md-8 p-0">
            <iframe class="w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6216413501766!2d1.1684554157296931!3d6.181368228758596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1021593cf5703953%3A0xcf383ad4dc70f86c!2sBoulevard%20Du%2030%20Aout!5e0!3m2!1sfr!2stg!4v1661199356898!5m2!1sfr!2stg"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-12 col-md-4 p-0">

            <div class="newslet w-100">
                <!-- <img src="./assets/images/newsletter.png" class="w-100" height="450" alt=""> -->
               <div class="newsletter-text p-3">
                    <h4 class=" text-center pt-3 text-light"> <span>NEW</span><span
                        class="undreline">SLET</span>TER</h4>

                    <p class="text-light">
                    Pour vous ,entreprises professionnelles Inscrivez vous afin de recevoir les informations par rapport
                    à nos offreset promos speciales</p>

                    <input type="text" class="inputmail-buttont" name="email" placeholder="Votre adresse e-mail" required> <br class="go-in-line">
                    <input type="checkbox" class="checkbox " name="checkbox" required> <span class="text-light"> J'accepte que knowledge tchnology m'envoie des mails</span> <br>
                    <button class="inputmail-buttone text-light">VALIDER</button>
               </div>
            </div>
        </div>
    </div>
    <!--end-google map -->

    <!-- footer -->
    <div class="container mt-5">
        <div class="black-line">
            <p class="black">black</p>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-3">
                    <p>Informations pratiques</p>
                    <p>
                        contacter nous 24h/24 et 7j/7
                        Tel: 91 62 24 97 / 99 40 93 20
                    </p>
                </div>

                <div class="col-3">
                    <p>Informations pratiques</p>
                    <p>
                        contacter nous : <br>
                        24h/24 et 7j/7
                        Tel: 91 62 24 97 / 99 40 93 20
                    </p>
                </div>

                <div class="col-3">
                    <p>Informations pratiques</p>
                    <p>
                        contacter nous : <br>
                        24h/24 et 7j/7
                        Tel: 91 62 24 97 / 99 40 93 20
                    </p>
                </div>

                <div class="col-3">
                    <p>Informations pratiques</p>
                    <p>
                        contacter nous : <br>
                        24h/24 et 7j/7
                        Tel: 91 62 24 97 / 99 40 93 20
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="copyrigth pt-3">
        <p class="text-light text-center" style="height: 65px;">copyrigth</p>
    </div>
    <!-- end-footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>