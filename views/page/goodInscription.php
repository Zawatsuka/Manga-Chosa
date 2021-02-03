<?php include(dirname(__FILE__).'/../template/header.php') ?>
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