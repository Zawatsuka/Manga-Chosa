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
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-7">
                    <form class="d-flex flex-column">
                        <div>
                            <input type="text" class="m-3 p-3 name-tag zoom" placeholder="Ton Nom / Pseudo">
                        </div>
                        <div>
                            <textarea class="ml-md-3 zone-msg zoom d-none d-sm-none d-md-block" name="" id="" cols="120"
                                rows="10" placeholder="Donne nous ton p'tit message !"></textarea>
                        </div>
                        <div>
                            <textarea class="ml-md-3 zone-msg zoom d-block d-sm-block d-md-none" name="" id="" cols="40"
                                rows="10" placeholder="Donne nous ton p'tit message !"></textarea>
                        </div>
                        <div class="d-flex justify-content-end ">
                            <button class="ml-3 p-2 m-1 mb-2 zoom button-speak">Envoi ici !</button>
                        </div>
                    </form>
                </div>
                <!-- partie droite du site-->
                <div class="col-5 d-none d-sm-none d-md-block bg-right slideInRight">
                    <div class="d-flex justify-content-center marg-img ">
                        <img src="assets/img/chosachan2.png" class="img-fluid mt-5" width="250" alt="">
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid slideInRight">
            <div class="row bg-footer">
                <!-- partie gauche du footer -->
                <h5 class="p-3 text-change text-light d-block d-sm-block d-md-none">Hésite pas à nous retrouver sur les
                    réseaux !</h5>
                <div class="col-6 text-footer">
                    <h5 class="p-3 text-change text-light d-none d-sm-none d-md-block">Hésite pas à nous retrouver sur
                        les réseaux !</h5>
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
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/animation.js"></script>
</body>

</html>