<?php
    require_once 'includes/connection.php';
    require 'includes/publicFunctions.php';
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Top 100 des meilleurs hôtels - Une année de voyages</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>

    <?php
        publicHeader();
    ?>

        <section class="top100">
            <div class="header">
                <div class="container">
                    <h1 class="title">Le Top 100 des meilleurs Hôtels
                    <br>à travers le monde</h1>
                    <div class="decorative-bar"></div>
                </div>
            </div>
            
            <div class="ranking">
                <div class="container">
                    <?php
                        publicTopListCards($pdo, 'hebergement');
                    ?>
                </div>
            </div>
            
            <div class="more">
                <a href="#" class="btn btn-primary btn-lg btn-moretop100">En voir plus...</a>
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
