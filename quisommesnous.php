<?php
    require_once 'includes/connection.php';
    require 'includes/publicFunctions.php';
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Qui sommes-nous ? - Une année de voyages</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
    <?php
        publicHeader();
    ?>

        <section class="quisommesnous">
            <div class="header">
               <img src="assets/img/iceland.png" alt="background">
            </div>
            
            <div class="container">
                <div class="head-news">
                    <h1 class="title">Qui Sommes Nous ?</h1>
                </div>
            </div>
            
            <div class="article-text">
                <div class="container">                    
                    <p>Un concept d'édition qui surfe sur la tradition et plonge dans l'ère du numérique !</p>
                    <p>Né d'une idée d'éditrice, Une Année De Voyages sera le premier Mook français entièrement consacré aux voyages.</p>
                    <h3>Notre mission numéro 1 :</h3>
                    <p>Vous donner envie de partir avec des articles documentés et rédigés comme des carnets de voyages où l'on s'immerge dans la beauté du monde au travers de textes et de visuels de qualité.</p>
                    <h3>Notre seconde mission :</h3>
                    <p>Vous dire comment partir à l’aide de fiches pratiques d'exception truffées de conseils sur comment partir ? Que visiter ? Où se restaurer ? Qui rencontrer ? The place to be selon les "locaux" ! Bref, un sourcing fouillé digne d'un guide. Des informations contrôlées, valables, validées, cohérentes, praticables et reproductibles par tous.</p>
                    <h3>Notre force :</h3>
                    <p>Obsolescence DÉ-programmée : l'application Une Année De Voyages</p>
                    <p> La durée de vie d'un reportage se limite à ses renseignements pratiques. Avec l'application Une Année De Voyages nos lecteurs trouveront toutes les fiches pratiques des voyages mises à jour régulièrement. Ainsi Une Année De Voyages devient une sorte de "bible" intemporelle des destinations avec des reportages bénéficiant d'une durée de vie illimitée... Le rêve !</p>
                </div>
            </div>
            
            <div class="team">
                <div class="container">
                    <div class="title">
                        <h3>Notre équipe</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 item">
                            <img src="assets/img/team1.jpg" alt="onestpasdevnous">
                            <h3>Judith Lossmann</h3>
                            <h5>Fondatrice <br> Rédactrice en chef</h5>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 item">
                            <img src="assets/img/team2.jpg" alt="onestpasdevnous">
                            <h3>Caroline M’zali</h3>
                            <h5>Pigiste <br> Secrétaire de rédaction</h5>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 item">
                            <img src="assets/img/team3.jpg" alt="onestpasdevnous">
                            <h3>Inma Serrano</h3>
                            <h5>Illustratrice</h5>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 item">
                            <img src="assets/img/team4.jpg" alt="onestpasdevnous">
                            <h3>Damien Dégremont</h3>
                            <h5>Développeur du site</h5>
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
