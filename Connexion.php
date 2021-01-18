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
    <!-- nav bar du site  -->
    <?php include('template\navbar.php')?>
    </header>
    <main>
        <!-- partie gauche du site -->
        <div class="container-fluid fadeInLeft">
            <!-- sondage -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 justify-content-center p-5">
                    <div class="d-flex justify-content-center">
                        <div class="flex-column">
                            <div class="d-none d-sm-none d-md-block">
                                <input type="text" size="70" class="p-3 m-4 connexion-form zoom"
                                    placeholder="Pseudo/Adresse Mail">
                            </div>
                            <div class="d-none d-sm-none d-md-block">
                                <input type="password" size="70" class="p-3 m-4 connexion-form zoom"
                                    placeholder="Mot de passe">
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <input type="text" size="40" class="p-3 m-4 connexion-form zoom"
                                    placeholder="Pseudo/Adresse Mail">
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <input type="password" size="40" class="p-3 m-4 connexion-form zoom"
                                    placeholder="Mot de passe">
                            </div>
                            <div class="button-margin">
                                <a href="#">
                                    <p class="color-link ml-3">T'as oublié ton mot de passe ?</p>
                                </a>
                            </div>
                            <div class="button-margin zoom">
                                <button class="px-5 py-4 m-3 button-connect"> Connexion </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- partie droite du site-->
                <div class="col-5 d-none d-sm-none d-md-block bg-right slideInRights">
                    <div class="d-flex justify-content-center marg-img-connect">
                        <img src="assets/img/chosachan2.png" class="img-fluid " width="250" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container-fluid slideInRight">
        <div class="row bg-footer">
            <!-- partie gauche du footer -->
            <h5 class="p-3 text-change text-light d-block d-sm-block d-md-none">Hésite pas à nous retrouver sur les réseaux !</h5>
            <div class="col-6 text-footer">
                <h5 class="p-3 text-change text-light d-none d-sm-none d-md-block">Hésite pas à nous retrouver sur les réseaux !</h5>
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