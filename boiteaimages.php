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
                    <ul class="menu menu-bai">
                        <li class="active">Gastronomie</li>
                        <li>Bien-Être</li>
                        <li>Cultures</li>
                        <li>Sports</li>
                    </ul>
                </div>
                
                <div class="carousel-display">
                    <div id="carousel-gastronomie" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-gastronomie" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-gastronomie" data-slide-to="1"></li>
                            <li data-target="#carousel-gastronomie" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-gastronomie" role="button" data-slide="prev">
                            <i class="fas fa-arrow-circle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-gastronomie" role="button" data-slide="next">
                            <i class="fas fa-arrow-circle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div id="carousel-bienetre" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-bienetre" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-bienetre" data-slide-to="1"></li>
                            <li data-target="#carousel-bienetre" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-bienetre" role="button" data-slide="prev">
                            <i class="fas fa-arrow-circle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-bienetre" role="button" data-slide="next">
                            <i class="fas fa-arrow-circle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div id="carousel-culture" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-culture" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-culture" data-slide-to="1"></li>
                            <li data-target="#carousel-culture" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-culture" role="button" data-slide="prev">
                            <i class="fas fa-arrow-circle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-culture" role="button" data-slide="next">
                            <i class="fas fa-arrow-circle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div id="carousel-sport" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-sport" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-sport" data-slide-to="1"></li>
                            <li data-target="#carousel-sport" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="assets/img/indonesia.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Lorem ipsum dolor</h5>
                                    <p>Sit amet, consectetur adipisicing elit. Accusamus ullam, quia blanditiis temporibus possimus facilis.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-sport" role="button" data-slide="prev">
                            <i class="fas fa-arrow-circle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-sport" role="button" data-slide="next">
                            <i class="fas fa-arrow-circle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
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
