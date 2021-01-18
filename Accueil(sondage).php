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
        <div class="dropdown d-block d-sm-block d-md-none fadeInLeft p-3 position-i">
            <button class="btn btn-secondary dropdown-toggle p-3 text-change" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Themes
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item text-change" href="#">Shonen</a>
                <a class="dropdown-item text-change" href="#">Shojo</a>
                <a class="dropdown-item text-change" href="#">Seinen</a>
                <a class="dropdown-item text-change" href="#">Ecchi</a>
            </div>
        </div>
        <div class="container-fluid">
            <!-- sondage -->

            <div class="row ">
                <div class="col-12 col-sm-12 col-md-7">
                    <div class=" mt-3 align-items-center fadeInLeft">
                        <div class="d-flex flex-row">
                            <div>
                                <a data-toggle="collapse" href="#collapseExample" onclick="move()" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <img src="assets/img/jotaro.png" alt="jotaro Kujo"
                                        class="ml-2 img-fluid index-img zoom">
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 60%"> 60%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/versus.svg" alt="Versus" width="65" class="img-fluid p-3 align-center">
                            <div>
                                <a data-toggle="collapse" href="#collapseExample" onclick="move()" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <img src="assets/img/josuke.png" alt="josuke Higashikata"
                                        class="ml-2md- img-fluid index-img zoom">
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 40%"> 40%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- partie commentaires -->
                    <!-- partie envoi de message en pc  -->
                    <div class="d-flex align-items-center ml-3 mt-3 fadeInLeft">
                        <h2 class="title-comment d-none d-sm-none d-md-block">Commentaires </h2>
                        <input class="ml-4 d-none d-sm-none d-md-block" type="text" placeholder="Ton commentaire..."
                            size="55">
                        <a href="#"><img src="assets/img/fleche.png" class="img-fluid zoom d-none d-sm-none d-md-block"
                                width="30" alt=""></a>
                    </div>
                    <!-- partie envoi de message en mobile  -->
                    <div class="fadeInLeft">
                        <h2 class="title-comment text-center d-block d-sm-block d-md-none">Commentaires </h2>
                        <div class="d-flex justify-content-center">
                            <input class="ml-4 d-block d-sm-block d-md-none" type="text"
                                placeholder="ton commentaire..." size="30">
                            <a href="#"><img src="assets/img/fleche.png"
                                    class="img-fluid zoom d-block d-sm-block d-md-none" width="30" alt=""></a>
                        </div>
                    </div>
                    <div class="bg-comment mt-3 ml-3 fadeInLeft bg-border">
                        <div>
                            <div class="d-flex align-center">
                                <img src="assets/img/mr-Robot.png" width="50" class="img-fluid mt-4 ml-4" alt="">
                                <h3 class="mt-4 ml-4 text-comment">Mr_Robot_23</h3>
                            </div>
                            <p class="comment "> Trop cool !</p>

                        </div>
                    </div>
                </div>




                <!-- partie droite du site-->
                <div class="col-5 d-none d-sm-none d-md-block bg-right slideInRight">
                    <!-- liste des differents genres -->
                    <ul>
                        <a href="#">
                            <li class="mt-5 center-text zoom">Shonen</li>
                        </a>
                        <a href="#">
                            <li class="mt-5 center-text zoom">Shojo</li>
                        </a>
                        <a href="#">
                            <li class="mt-5 center-text zoom">Seinen</li>
                        </a>
                        <a href="#">
                            <li class="mt-5 center-text zoom">Ecchi</li>
                        </a>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <img src="assets/img/chosachan2.png" class="img-fluid mt-5" width="250" alt="">
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
    <script src="assets/js/script.js"></script>
    <script src="assets/js/animation.js"></script>
</body>

</html>