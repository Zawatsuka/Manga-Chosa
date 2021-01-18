<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- le style css  -->
    <link rel="stylesheet" href="assets/css/style-accueil.css">
    <link rel="stylesheet" href="assets/css/animation.css">
    <link rel="stylesheet" href="assets/css/style-form.css">
    <link rel="stylesheet" href="assets/css/style-connexion.css">
    <link rel="stylesheet" href="assets/css/inscript.css">
    <!-- la police -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Chosa Chan.ico">

    <title>Manga Chōsa</title>
</head>

<body>
    <header>
        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg navbar-primary bg-img slideInDown stick">
            <a class="navbar-brand d-none d-sm-none d-md-block d-lg-block rubberBand" href="#">
                <img src="assets/img/manga-chosa-blanc.png" width="180" height="120" alt="" loading="lazy">
            </a>
            <a class="navbar-brand d-block d-sm-block d-md-none d-lg-none rubberBand" href="#">
                <img src="assets/img/logo-mobile.png" width="180" height="75" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div> <img src="assets/img/burger2.png" width="50" height="50" alt=""></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="Accueil(sondage).php">Sondage<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="Formulaire.php">On Parle ?</a>
                    </li>
                    <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="Derniers-Sondages.php">Derniers
                            Sondages</a>
                    </li>
                    <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="Connexion.php">Connexion</a>
                    </li>
                    <li class="nav-item zoom">
                        <a class="nav-link text-white text-change ml-md-5" href="Inscription.php">Inscris toi ?</a>
                    </li>
                    <li class="nav-item mt-3 ml-5">
                        <div class="d-flex justify-content-center">
                            <input type="search" id="site-search" name="q" aria-label="Search through site content"
                                class="searchbar" placeholder="Tu peux chercher ici !" size="25">
                            <a href=""><img src="assets/img/search.png" width="32" height="32" alt="" class="zoom"></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <!-- partie gauche du site -->
        <div class="container-fluid fadeInLeft">
            <!-- sondage -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 justify-content-center p-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-12 col-sm-12">
                                <div class="d-flex flex-column">
                                    <div class="p-2"><input type="text" class="p-3 input-inscript zoom" size="30"
                                            placeholder="ton adresse mail..."></div>
                                    <div class="p-2"><input type="password" class="p-3 input-inscript zoom" size="30"
                                            placeholder="mot de passe"></div>
                                    <div class="p-2"><input type="password" class="p-3 input-inscript zoom" size="30"
                                            placeholder="Retape le on sait jamais"></div>
                                    <div class="d-flex flex-row ml-2 mt-3">
                                        <div><input type="radio" class="ml-3 border-change mt-3 zoom"></div>
                                        <div>
                                            <p class="ml-3 text-change">Homme</p>
                                        </div>
                                        <div><input type="radio" class="ml-3 border-change mt-3 zoom"></div>
                                        <div>
                                            <p class="ml-3 text-change">Femme</p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row ml-2 ">
                                        <div><input type="radio" class="ml-3 border-change mt-3 zoom"></div>
                                        <div>
                                            <p class="ml-3 text-change">Autre</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 col-sm-12">
                                <div class="d-flex flex-column">
                                    <div class="p-2"><input type="text" class="p-3 input-inscript zoom" size="30"
                                            placeholder="ton pseudo"></div>
                                    <div>
                                        <p class="text-change ml-3 mt-3">Ton Anniversaire</p>
                                    </div>
                                    <div><input class="p-3 birthday ml-2 zoom" size="30" placeholder="Date/Mois/Année"></div>
                                    <div class="d-flex">
                                        <input type="checkbox" id="scales" name="scales" checked class="ml-3 mt-4 ">
                                        <label for="scales" class="text-check d-none d-sm-none d-md-block mt-3 ml-2 ">On t'envoi des mails de temps en temps
                                            ?</label>
                                            <label for="scales" class="text-checkto d-block d-sm-block d-md-none mt-4 ml-2">On t'envoi des mails de temps en temps
                                                ?</label>
                                    </div>
                                    <div class="button-margin zoom ">
                                        <button class="px-5 py-4 m-2 button-connect text-change"> Crée un compte </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- partie droite du site-->
                <div class="col-5 d-none d-sm-none d-md-block bg-right slideInRight">
                    <div class="d-flex justify-content-center marg-img-connect">
                        <img src="assets/img/chosachan2.png" class="img-fluid" width="250" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container-fluid slideInRight">
        <div class="row bg-footer">
            <!-- partie gauche du footer -->
            <h5 class="p-3 text-change text-light d-block d-sm-block d-md-none">Hésite pas à nous retrouver sur les
                réseaux !</h5>
            <div class="col-6 text-footer">
                <h5 class="p-3 text-change text-light d-none d-sm-none d-md-block">Hésite pas à nous retrouver sur les
                    réseaux !</h5>
                <div class="d-flex align-item-center mt-4">
                    <img src="assets/img/facebook.png" class="" width="30" height="30" alt="">
                    <a href="#" class="text-footer">
                        <p class="ml-2">Manga Chōsa</p>
                    </a>
                </div>
                <div class="d-flex align-item-center mt-4">
                    <img src="assets/img/insta.png" class="" width="30" height="30" alt="">
                    <a href="#" class="text-footer">
                        <p class="ml-2">Manga Chōsa</p>
                    </a>
                </div>
                <p class="mt-2">Manga Chōsa© by Zawa</p>
            </div>
            <!-- partie droite du footer  -->
            <div class="col-6 col-sm-6  col-md-6 d-flex justify-content-end text-left">
                <div class="mt-4">
                    <a href="#" class="text-footer">
                        <p>Politique de confidentialité</p>
                    </a>
                    <a href="#" class="text-footer">
                        <p>Mentions légales</p>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/animation.js"></script>
</body>

</html>