<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="./assets/css/inscription.css">
    <title>inscription</title>
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

                            <li class="nav-item ">
                                <a class="vv nav-link text-light mx-5" style="magin: padding: 70px; " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            
                    
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- <div class="block-image-accueil">
                <img src="/assets/images/2-blackstudent.jpeg" class="imag-invisible img-fluid" alt="Etudiants">
                <div class="text-accueil">
                    <div class="text">
                        <p class="text-light text-center">CENTRE DE FORMATION QUI REPOND</p>
                        <p class="text-light text-center">CENTRE DE FORMATION QUI REPOND</p>

                        <p class="text-light text-center"> </p>
                    </div>
                </div>
            </div> -->
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
    <!-- formilaire-etudiant -->
    <div>

    <h1 class="text-center pt-5">INSCRIVEZ-VOUS</h1>

    <h3 class="text-center">REMPLISSER LE FORMULAIRE CI-APRÈS</h3>

    <h5 class="info text-center text-#0658D3">Informations personnelle</h5>
        <div>
           
            <form action="" method="post">
                {{ csrf_field()}}
                <div class="container">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nom :</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputPassword1">
                    </div>
    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Prénom :</label>
                        <input type="text" class="form-control" name="prenom" id="exampleInputPassword1" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Date de naissance :</label>
                        <input type="date" class="form-control" name="date_Naissance" id="exampleInputPassword1" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Préfecture de residence :</label>
                        <input type="text" class="form-control" name="prefecture" id="exampleInputPassword1" required>
                    </div>
    
    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Sexe :</label>
                        <select class="form-select form-control" name="sexe" aria-label="Default select example" required>
                            <option selected></option>
                            <option value="1">HOMME</option>
                            <option value="2">FEMME</option>
                          </select>
                    </div>
    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Numero de telephone :</label>
                        <input type="number" class="form-control" name="numeroTel" id="exampleInputPassword1" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">E-mail :</label>
                        <input type="email" class="form-control" name="email" id="exampleInputPassword1" required>
                    </div>
                    
                    <h5 class="text-center">Pièces à fournir</h5>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Naissance, Relevet de note, Bulletins :</label>
                        <input type="file" class="form-control" name="fichiers" id="exampleInputPassword1" required>
                    </div>
    

                    <h5 class="text-center">Etude</h5>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Filière choisie :</label>
                        <select class="form-select form-control" name="filiere" aria-label="Default select example" required>
                            <option selected></option>
                            <option value="1">Maintenance Informatique</option>
                            <option value="2">Réseau et télecommunication</option>
                            <option value="1">Développement Web et Mobile & Web Design</option>
                            <option value="2">Infographie et zeb design</option>
                          </select>
                    </div>

                    <div class="mt-5">
                        <input type="submit" class="form-control text-light" style="background-color: #1113F9;" value="ENVOYER" name="fichiers" id="exampleInputPassword1">
                    </div>
            </form>
        </div>
    </div>

    <!-- end-formulaire-etudiant -->

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
      
                        <input type="text" class="inputmail-buttont" placeholder="votre adresse e-mail" required> <br class="go-in-line">
                        <input type="checkbox" class="checkbox " required> <span class="text-light"> J'accepte que knowledge tchnology m'envoie des mails</span> <br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
