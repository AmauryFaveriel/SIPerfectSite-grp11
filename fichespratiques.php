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

        <section class="fiches-pratiques">
            <div class="header">
                <h1 class="title">
                    Vous cherchez la meilleure adresse ?
                </h1>
                <div class="container">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Restaurant italien..." aria-label="Restaurant italien..." aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="submit" ><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="filters">
               <div class="container">
                   <h2 class="title">
                       <form action="" method="post">
                           Je veux voir les bonnes adresses de 

                           <select id="select" name="select[city]">
                               <option value="Paris" selected>Paris</option> 
                               <option value="Tokyo">Tokyo</option>
                               <option value="Rio">Rio</option>
                               <option value="Moscou">Moscou</option>
                               <option value="Berlin">Berlin</option>
                               <option value="Nairobi">Nairobi</option>
                               <option value="Denver">Denver</option>
                               <option value="Helsinki">Helsinki</option>
                               <option value="Oslo">Oslo</option>
                           </select>

                   </h2>
                   <div class="row categories justify-content-between">
                       <a href="fichespratiques.php?category=hebergement" class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-bed"></i>
                           <h3 class="title">Hébergement</h3>
                           <h5 class="subtitle">Hôtels et Maisons d'hôtes</h5>
                       </a>
                       <a href="fichespratiques.php?category=gastronomie" class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-utensils"></i>
                           <h3 class="title">Gastronomie</h3>
                           <h5 class="subtitle">Restaurants, cafés, bars</h5>
                       </a>
                       <a href="fichespratiques.php?category=place" class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-gem"></i>
                           <h3 class="title">The Place to Be</h3>
                           <h5 class="subtitle">Nos meilleures adresses</h5>
                       </a>
                       <a href="fichespratiques.php?category=shopping" class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-shopping-bag"></i>
                           <h3 class="title">Shopping</h3>
                           <h5 class="subtitle">Boutiques &amp; Concept Stores</h5>
                       </a>
                       <a href="fichespratiques.php?category=culturel" class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-building"></i>
                           <h3 class="title">Culturel</h3>
                           <h5 class="subtitle">Musées, Théatres &amp; Concerts</h5>
                       </a>
                       <a href="fichespratiques.php?category=bienEtre" class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-leaf"></i>
                           <h3 class="title">Bien-Être</h3>
                           <h5 class="subtitle">Spas, Thalassos &amp; Soins du Corps</h5>
                       </a>
                       <a href="fichespratiques.php?category=sport" class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-sun"></i>
                           <h3 class="title">Sport &amp; Aventure</h3>
                           <h5 class="subtitle">Ski, Surf &amp; Golf</h5>
                       </a>
                       <a href="fichespratiques.php?category=fly" class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-plane"></i>
                           <h3 class="title">Compagnies Aériennes</h3>
                           <h5 class="subtitle">Pour un itinéraire spécifique</h5>
                       </a>
                       
                       </form>
                   </div>
               </div>
            </div>

            <div class="results">
                <div class="container">
                       <h1 class="title-results">
                           Résultats trouvés
                       </h1>
                    <div class="row justify-content-between">
                        <?php
                            publicListCards($pdo);
                        ?>
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
