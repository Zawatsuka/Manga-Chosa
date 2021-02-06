<?php include(dirname(__FILE__).'/../template/header.php') ?>

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
            </div>
        </div>
    </main>
    <?php include(dirname(__FILE__).'/../template/footer.php') ?>
</body>

</html>