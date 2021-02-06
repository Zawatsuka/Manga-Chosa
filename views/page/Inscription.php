<?php include(dirname(__FILE__).'/../template/header.php') ?>
    <main>
        <!-- partie gauche du site -->
        <div class="container-fluid fadeInLeft">
            <div class="row">
                <div class="col-7">
                <?php 
                include(dirname(__FILE__).'/../../controllers/userRegisterCtrl.php');
                if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errors)){
                    include('../template/goodInscription.php');
                }else{
                    include(dirname(__FILE__).'/../template/formInscription.php');  
                    }
                    ?>
                </div>
                <!-- partie droite du site-->
                <div class="col-5 d-none d-sm-none d-md-block bg-right slideInRight">
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