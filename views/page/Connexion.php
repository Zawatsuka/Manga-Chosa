<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- le style css  -->
    <link rel="stylesheet" href="../../assets/css/style-accueil.css">
    <link rel="stylesheet" href="../../assets/css/animation.css">
    <link rel="stylesheet" href="../../assets/css/style-form.css">
    <link rel="stylesheet" href="../../assets/css/style-connexion.css">
    <!-- la police -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/Chosa Chan.ico">

    <title>Manga Chōsa</title>
</head>

<body>
    <header>
    <!-- nav bar du site  -->
    <?php include(dirname(__FILE__).'/../template/navbar.php')?>
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
                    <img src="../../assets/img/chosachan2.png" class="img-fluid mt-5" width="250" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include(dirname(__FILE__).'/../template/footer.php') ?>
</body>

</html>