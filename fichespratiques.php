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

                           <select id="select">
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
                       </form>
                   </h2>
                   <div class="row categories justify-content-between">
                       <button class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-bed"></i>
                           <h3 class="title">Hébergement</h3>
                           <h5 class="subtitle">Hôtels et Maisons d'hôtes</h5>
                       </button>
                       <button class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-utensils"></i>
                           <h3 class="title">Gastronomie</h3>
                           <h5 class="subtitle">Restaurants, cafés, bars</h5>
                       </button>
                       <button class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-gem"></i>
                           <h3 class="title">The Place to Be</h3>
                           <h5 class="subtitle">Nos meilleures adresses</h5>
                       </button>
                       <button class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-shopping-bag"></i>
                           <h3 class="title">Shopping</h3>
                           <h5 class="subtitle">Boutiques &amp; Concept Stores</h5>
                       </button>
                       <button class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-building"></i>
                           <h3 class="title">Culturel</h3>
                           <h5 class="subtitle">Musées, Théatres &amp; Concerts</h5>
                       </button>
                       <button class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-leaf"></i>
                           <h3 class="title">Bien-Être</h3>
                           <h5 class="subtitle">Spas, Thalassos &amp; Soins du Corps</h5>
                       </button>
                       <button class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-sun"></i>
                           <h3 class="title">Sport &amp; Aventure</h3>
                           <h5 class="subtitle">Ski, Surf &amp; Golf</h5>
                       </button>
                       <button class="col-lg-3 col-md-4 col-sm-6 item">
                           <i class="fas fa-plane"></i>
                           <h3 class="title">Compagnies Aériennes</h3>
                           <h5 class="subtitle">Pour un itinéraire spécifique</h5>
                       </button> 
                       <div class="col-md-12 box-search">
                           <a href="#" class="btn btn-primary btn-lg">Rechercher</a>
                       </div>
                   </div>
               </div>
            </div>
            
            <div class="results">
                <div class="container">
                       <h1 class="title-results">
                           6 résultats trouvés
                       </h1>
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 col-md-sm-12 item">
                            <div class="head">
                                <div class="left">
                                    <h3 class="title">Restaurant de tes morts</h3>
                                    <div class="note">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="date-open">
                                        <i class="far fa-clock"></i> 12:00
                                    </span>
                                    <span class="date-close">
                                        <i class="fas fa-clock"></i> 02:00
                                    </span>
                                </div>
                                <div class="right">
                                    <img src="assets/img/hotels.jpg" alt="miniature">
                                </div>
                            </div>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo recusandae, cumque perspiciatis, animi omnis natus aut reprehenderit cupiditate fuga eligendi maiores, labore explicabo. Culpa molestiae corporis obcaecati tenetur debitis cupiditate aliquid, tempora impedit, facere veniam magnam aperiam quidem quas saepe quia, laborum deserunt consectetur at animi. Itaque, at, vitae. Ea similique animi voluptatem autem excepturi, dicta, beatae porro ipsam.</p>
                            <div class="foot">
                                <div class="left">
                                    <a href="tel:33142887575" class="phone">
                                        <i class="fas fa-phone-square"></i> +33 1 42 88 75 75
                                    </a>
                                    <h5 class="adress">
                                        24 Avenue George V, 75008<br>  
                                        Paris - France
                                    </h5>
                                </div>
                                <div class="right">
                                    <a href="#" class="btn btn-primary">Réserver</a>
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-4 col-md-6 col-md-sm-12 item">
                           <div class="head">
                               <div class="left">
                                   <h3 class="title">Restaurant de tes morts</h3>
                                   <div class="note">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                   </div>
                                   <span class="date-open">
                                       <i class="far fa-clock"></i> 12:00
                                   </span>
                                   <span class="date-close">
                                       <i class="fas fa-clock"></i> 02:00
                                   </span>
                               </div>
                               <div class="right">
                                   <img src="assets/img/hotels.jpg" alt="miniature">
                               </div>
                           </div>
                           <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo recusandae, cumque perspiciatis, animi omnis natus aut reprehenderit cupiditate fuga eligendi maiores, labore explicabo. Culpa molestiae corporis obcaecati tenetur debitis cupiditate aliquid, tempora impedit, facere veniam magnam aperiam quidem quas saepe quia, laborum deserunt consectetur at animi. Itaque, at, vitae. Ea similique animi voluptatem autem excepturi, dicta, beatae porro ipsam.</p>
                           <div class="foot">
                               <div class="left">
                                   <a href="tel:33142887575" class="phone">
                                       <i class="fas fa-phone-square"></i> +33 1 42 88 75 75
                                   </a>
                                   <h5 class="adress">
                                       24 Avenue George V, 75008<br>  
                                       Paris - France
                                   </h5>
                               </div>
                               <div class="right">
                                   <a href="#" class="btn btn-primary">Réserver</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-md-sm-12 item">
                           <div class="head">
                               <div class="left">
                                   <h3 class="title">Restaurant de tes morts</h3>
                                   <div class="note">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                   </div>
                                   <span class="date-open">
                                       <i class="far fa-clock"></i> 12:00
                                   </span>
                                   <span class="date-close">
                                       <i class="fas fa-clock"></i> 02:00
                                   </span>
                               </div>
                               <div class="right">
                                   <img src="assets/img/hotels.jpg" alt="miniature">
                               </div>
                           </div>
                           <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo recusandae, cumque perspiciatis, animi omnis natus aut reprehenderit cupiditate fuga eligendi maiores, labore explicabo. Culpa molestiae corporis obcaecati tenetur debitis cupiditate aliquid, tempora impedit, facere veniam magnam aperiam quidem quas saepe quia, laborum deserunt consectetur at animi. Itaque, at, vitae. Ea similique animi voluptatem autem excepturi, dicta, beatae porro ipsam.</p>
                           <div class="foot">
                               <div class="left">
                                   <a href="tel:33142887575" class="phone">
                                       <i class="fas fa-phone-square"></i> +33 1 42 88 75 75
                                   </a>
                                   <h5 class="adress">
                                       24 Avenue George V, 75008<br>  
                                       Paris - France
                                   </h5>
                               </div>
                               <div class="right">
                                   <a href="#" class="btn btn-primary">Réserver</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-md-sm-12 item">
                           <div class="head">
                               <div class="left">
                                   <h3 class="title">Restaurant de tes morts</h3>
                                   <div class="note">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                   </div>
                                   <span class="date-open">
                                       <i class="far fa-clock"></i> 12:00
                                   </span>
                                   <span class="date-close">
                                       <i class="fas fa-clock"></i> 02:00
                                   </span>
                               </div>
                               <div class="right">
                                   <img src="assets/img/hotels.jpg" alt="miniature">
                               </div>
                           </div>
                           <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo recusandae, cumque perspiciatis, animi omnis natus aut reprehenderit cupiditate fuga eligendi maiores, labore explicabo. Culpa molestiae corporis obcaecati tenetur debitis cupiditate aliquid, tempora impedit, facere veniam magnam aperiam quidem quas saepe quia, laborum deserunt consectetur at animi. Itaque, at, vitae. Ea similique animi voluptatem autem excepturi, dicta, beatae porro ipsam.</p>
                           <div class="foot">
                               <div class="left">
                                   <a href="tel:33142887575" class="phone">
                                       <i class="fas fa-phone-square"></i> +33 1 42 88 75 75
                                   </a>
                                   <h5 class="adress">
                                       24 Avenue George V, 75008<br>  
                                       Paris - France
                                   </h5>
                               </div>
                               <div class="right">
                                   <a href="#" class="btn btn-primary">Réserver</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-md-sm-12 item">
                           <div class="head">
                               <div class="left">
                                   <h3 class="title">Restaurant de tes morts</h3>
                                   <div class="note">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                   </div>
                                   <span class="date-open">
                                       <i class="far fa-clock"></i> 12:00
                                   </span>
                                   <span class="date-close">
                                       <i class="fas fa-clock"></i> 02:00
                                   </span>
                               </div>
                               <div class="right">
                                   <img src="assets/img/hotels.jpg" alt="miniature">
                               </div>
                           </div>
                           <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo recusandae, cumque perspiciatis, animi omnis natus aut reprehenderit cupiditate fuga eligendi maiores, labore explicabo. Culpa molestiae corporis obcaecati tenetur debitis cupiditate aliquid, tempora impedit, facere veniam magnam aperiam quidem quas saepe quia, laborum deserunt consectetur at animi. Itaque, at, vitae. Ea similique animi voluptatem autem excepturi, dicta, beatae porro ipsam.</p>
                           <div class="foot">
                               <div class="left">
                                   <a href="tel:33142887575" class="phone">
                                       <i class="fas fa-phone-square"></i> +33 1 42 88 75 75
                                   </a>
                                   <h5 class="adress">
                                       24 Avenue George V, 75008<br>  
                                       Paris - France
                                   </h5>
                               </div>
                               <div class="right">
                                   <a href="#" class="btn btn-primary">Réserver</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 col-md-sm-12 item">
                           <div class="head">
                               <div class="left">
                                   <h3 class="title">Restaurant de tes morts</h3>
                                   <div class="note">
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="fas fa-star"></i>
                                       <i class="far fa-star"></i>
                                       <i class="far fa-star"></i>
                                   </div>
                                   <span class="date-open">
                                       <i class="far fa-clock"></i> 12:00
                                   </span>
                                   <span class="date-close">
                                       <i class="fas fa-clock"></i> 02:00
                                   </span>
                               </div>
                               <div class="right">
                                   <img src="assets/img/hotels.jpg" alt="miniature">
                               </div>
                           </div>
                           <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit illo recusandae, cumque perspiciatis, animi omnis natus aut reprehenderit cupiditate fuga eligendi maiores, labore explicabo. Culpa molestiae corporis obcaecati tenetur debitis cupiditate aliquid, tempora impedit, facere veniam magnam aperiam quidem quas saepe quia, laborum deserunt consectetur at animi. Itaque, at, vitae. Ea similique animi voluptatem autem excepturi, dicta, beatae porro ipsam.</p>
                           <div class="foot">
                               <div class="left">
                                   <a href="tel:33142887575" class="phone">
                                       <i class="fas fa-phone-square"></i> +33 1 42 88 75 75
                                   </a>
                                   <h5 class="adress">
                                       24 Avenue George V, 75008<br>  
                                       Paris - France
                                   </h5>
                               </div>
                               <div class="right">
                                   <a href="#" class="btn btn-primary">Réserver</a>
                               </div>
                           </div>
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
