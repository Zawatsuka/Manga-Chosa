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
                    <img src="../../assets/img/chosachan2.png" class="img-fluid mt-5" width="250" alt="">
                    </div>
                </div>
            </div>
        </div>
        <?php include(dirname(__FILE__).'/../template/footer.php') ?>
    </main>
</body>

</html>