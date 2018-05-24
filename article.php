<?php
    require_once 'includes/connection.php';
    require 'includes/publicFunctions.php';
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>La Chine dans tous ses états - Une année de voyages</title>
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
                    <h1 class="title">LA CHINE DANS TOUS SES ÉTATS</h1>
                    <h3 class="subtitle">Temps de lecture : 8 minutes</h3>
                    <h5>Auteur : Jordan Belfort</h5>
                    <h5>Publié le 24 Mai 2018</h5>
                </div>
            </div>
            
            <div class="article-text">
                <div class="container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum obcaecati esse qui adipisci, in magni deleniti, error quaerat minus labore accusantium perferendis nemo alias iure quam maxime. Tenetur quis dolorem cumque officia id perferendis inventore natus, aperiam asperiores adipisci? Ipsum, qui accusamus nisi, eum rerum provident, laboriosam aut enim aperiam in maiores, cum voluptatibus impedit asperiores molestias dolorem. In labore quasi minima provident, sint doloremque. Excepturi dicta impedit est dolores sint, alias, exercitationem quasi ad adipisci? Doloribus cum perferendis, laborum vel cupiditate nisi provident ipsum facilis aperiam, placeat, libero obcaecati voluptatum! Nam repudiandae neque molestiae porro excepturi aperiam eum delectus!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, nihil illo officia consequuntur tempore ipsa, dignissimos asperiores delectus nisi beatae voluptatum magnam cupiditate, error molestiae sapiente cum eveniet repudiandae voluptates.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio earum obcaecati voluptas optio atque molestiae deserunt id quis, consequuntur, quibusdam assumenda saepe dolores rerum! Eligendi ut rerum magnam quo impedit mollitia accusantium eos repellat eius placeat neque temporibus nam animi iure non vero illum laboriosam possimus commodi dolor, nisi eveniet ducimus amet! Dignissimos similique dolor necessitatibus nam? Eius nulla corporis, dignissimos error! Totam consequatur at asperiores vel unde optio tempora sapiente. Molestias, reprehenderit quaerat neque ad perferendis repellat laborum quibusdam nihil illo omnis nam explicabo commodi pariatur, et beatae quasi consequuntur minima sunt quas qui numquam? Laboriosam dignissimos eos aut, repellendus doloremque similique totam illum commodi. Ipsum eveniet voluptatibus sint. Deserunt nobis amet fugiat rerum quos, voluptas non obcaecati fuga atque? Hic aspernatur consectetur aperiam blanditiis reprehenderit delectus qui vero, vel? Perferendis quod laboriosam, unde dolor ut atque quia tenetur itaque necessitatibus tempore, et provident veniam sapiente ipsa soluta molestias dignissimos culpa, numquam libero! Perspiciatis cupiditate nihil aut distinctio facere eius, dicta molestias beatae quibusdam. Nostrum veritatis fuga, atque inventore voluptatibus repellat neque ducimus pariatur possimus sequi. Possimus, eveniet odio doloribus similique maxime facilis laborum. Numquam dolore, reiciendis in reprehenderit, illo veritatis minima, ducimus similique itaque voluptatem nam odio placeat.</p>
                    
                    <img src="assets/img/hvitserkur.jpg" alt="image demo">
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam totam praesentium, voluptatum iure id porro deleniti veniam fuga, iusto voluptatibus optio eaque beatae. Est ratione sint, beatae animi quidem corrupti, tempore temporibus eveniet placeat in aut. Odit sed, qui quisquam rem iusto, at. Adipisci amet cupiditate repellendus ad, nostrum illo!</p>
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
