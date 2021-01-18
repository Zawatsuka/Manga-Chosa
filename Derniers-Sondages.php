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
    <!-- nav bar du site  -->
        <?php include('template\navbar.php')?>
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
                        <h2 class="p-2">Sondages du 23/11/2020</h2>
                        <div class="d-flex flex-row p-3">
                            <div>
                                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    <img src="assets/img/luffy.png" alt="Monkey D. Luffy"
                                        class="ml-2 img-fluid index-img zoom">
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 70%"> 70%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/versus.svg" alt="Versus" width="65" class="img-fluid p-3 align-center">
                            <div>
                                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    <img src="assets/img/Ichigo.png" alt="Ichigo Kurosaki"
                                        class="ml-2md- img-fluid index-img zoom">
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                                role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 30%"> 30%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <?php include('template\footer.php') ?>
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