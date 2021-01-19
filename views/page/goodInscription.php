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
  <link rel="stylesheet" href="../../assets/css/inscript.css">
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
    <?php include(dirname(__FILE__).'/../template/navbar.php')?>
  </header>
  <main>
    <!-- partie gauche du site -->
    <div class="container-fluid fadeInLeft">
      <div class="row">
        <div class="col-7">
          <div class="container mt-3">
            <div class="text-center">
              <h2>Bienvenue <?= $pseudo ?></h2>
              <h3>Bravo vous etes inscris !</h3>
              <h4>Recapitulatif de votre inscription</h4>
              <p>Vous allez maintenant recevoir un mail de confirmation</p>
              <p>Civilité :
                <?php if($gender==1){
                      echo "Homme";
                    }else if($gender==2){
                      echo "Femme";
                    }else{
                      echo "Autre";
                    }
              ?></p>
              <p>Votre Email : <?=$mail ?? 'Vous n\'avez rien mis'?></p>
              <p>Votre Anniversaire : <?= $birthDate; ?></p>
            </div>
          </div>
        </div>
        <!-- partie droite du site-->
        <div class="col-5 d-none d-sm-none d-md-block bg-right slideInRight">
          <div class="d-flex justify-content-center marg-img-connect">
            <img src="../../assets/img/chosachan2.png" class="img-fluid" width="250" alt="">
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include(dirname(__FILE__).'/../template/footer.php') ?>
</body>

</html>