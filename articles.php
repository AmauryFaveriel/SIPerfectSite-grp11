<?php
    require_once 'includes/connection.php';
    require 'includes/publicFunctions.php';
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Nos fiches pratiques - Une année de voyages</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
    <?php
    publicHeader();
    ?>

        <section class="articles">
            <div class="header">
                <div class="container">
                    <h1 class="title">Les articles de nos reporters <br>
                        &amp; de vos compagnies préférées</h1>
                    <div class="decorative-bar"></div>
                </div>
            </div>
            
            <div class="filters">
                <div class="container">
                    <div class="row justify-content-between">
                        <form action="" method="post">
                            <input type="hidden" name="select[category]" value="destination">
                            <button class="col-sm-6 col-md-12 item destination">
                                <h3 class="title">Destinations</h3>
                            </button>
                        </form>
                        <form action="" method="post">
                            <input type="hidden" name="select[category]" value="newsAir">
                            <button class="col-sm-6 col-md-12 item newsair">
                                <h3 class="title">NEWS AIR</h3>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="baseline">
                    Découvrez tout les jours de nouvelles destinations,<br>
                    séléctionnées et testées par nos équipes, aux 4 coins du monde 
                </div>
            </div>
            
            <div class="articles-all">
                <div class="container">
                    <h3 class="title">Tous les articles</h3>
                    <div class="row">
                        <?php
                            publicListArticle($pdo, 9);
                        ?>
                        <div class="col-md-12 btn-box">
                            <a href="#" class="btn btn-primary btn-lg">En voir plus...</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="help-banner">
                <div class="container">
                    <div class="help-inside">
                        <div class="left">
                            <img src="assets/img/icon-help.png" alt="icon help">
                            <div>
                                <h3 class="title">Besoin d'aide ?</h3>
                                <h5 class="subtitle">Trouvez vos réponses dans le Centre d'aide en ligne ou contactez-nous.</h5>
                            </div>
                        </div>
                        <div class="right">
                            <a href="#" class="btn btn-light btn-lg">Consulter le centre d'aide →</a>
                        </div>
                    </div>                
                </div>
            </div>
        </section>
    <?php
        publicFooter($pdo);
    ?>


        <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>
