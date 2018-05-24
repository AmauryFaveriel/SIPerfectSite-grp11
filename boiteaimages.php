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

        <section class="boiteaimages">
            <div class="header">
                <div class="container">
                    <h1 class="title">La boîte à images</h1>
                    <div class="decorative-bar"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="filters">
                    <ul class="menu">
                        <li class="active">Gastronomie</li>
                        <li>Bien-Être</li>
                        <li>Cultures</li>
                        <li>Sports</li>
                    </ul>
                </div>
                
                <div class="carousel">
                    
                        <div class="photo">
                            <img src="assets/img/hotels.jpg" alt="image">
                        </div>
                    <div class="container">
                        <div class="description">
                            <h3 class="title">Nordegg</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam non, maiores ex reiciendis veniam error itaque recusandae dignissimos voluptatum tempora porro quo necessitatibus alias! Molestias quia dolor delectus minima, nam ut expedita repellat ipsum adipisci.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/hvitserkur.jpg" alt="miniature">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/hotels.jpg" alt="miniature">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/indonesia.jpg" alt="miniature">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/hvitserkur.jpg" alt="miniature">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/indonesia.jpg" alt="miniature">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/hotels.jpg" alt="miniature">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/hotels.jpg" alt="miniature">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/hvitserkur.jpg" alt="miniature">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <img src="assets/img/indonesia.jpg" alt="miniature">
                            </div>
                        </div>
                        <div class="col-md-12 btn-box">
                            <a href="" class="btn btn-primary btn-lg">En voir plus...</a>
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
