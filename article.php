<?php
    require_once 'includes/connection.php';
    require 'includes/publicFunctions.php';
    $data = publicShowArticleSQL($pdo);
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title><?=$data['title']?></title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
    <?php
        publicHeader();
    ?>

        <section class="article">
            <div class="header">
               <img src="assets/img/indonesia.jpg" alt="background">
            </div>
            
            <div class="container">
                <div class="head-news">
                    <h1 class="title"><?=$data['title']?></h1>
                    <h3 class="subtitle">Temps de lecture : 8 minutes</h3>
                    <h5>Auteur : Jordan Belfort</h5>
                    <h5>Publié le 24 Mai 2018</h5>
                </div>
            </div>
            
            <div class="article-text">
                <div class="container">
                    <img src="<?=$data['imgLink']?>" alt="<?=$data['imgAlt']?>">
                    
                    <p><?=nl2br($data['content'])?></p>
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
