<?php
    require_once 'includes/connection.php';
    require 'includes/publicFunctions.php';

    require "vendor/autoload.php";
    use Abraham\TwitterOAuth\TwitterOAuth;

    $oauth = new TwitterOAuth("nVqUnjKRE9Mn9FcKEn4GF03Xy", "1Y9W9P2j8Bbkx35BmQlG90R4Gkzreef4PgFDgYJl78OxyZXMJV");
    $accessToken = $oauth->oauth2('oauth2/token', ['grant_type' => 'client_credentials']);
    $access_token = $accessToken->access_token;
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Une année de voyages</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php
    publicHeader();
?>

    <section class="homepage">
        <div class="header-news">
            <div class="container">
                <h3 class="header-title">
                    Kilingking Beach<br> Isanto Arif<br> Indonésie</h3>
                <a href="#" class="btn btn-primary btn-lg">Lire l'article...</a>
            </div>
        </div>

        <div class="header-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 item">
                        <div class="left">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="right">
                            Chaque jour, de nouvelles idées de voyage
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="left">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="right">
                            Une séléction par des experts locaux
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="left">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="right">
                            Plus de 130 destinations à travers le monde
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="magazine">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 magazine-text">
                        <h1 class="title-magazine">
                            Soyez un voyageur averti !
                        </h1>
                        <h3 class="subtitle-magazine">
                            Découvrez dès maintenant le contenu du 1er numéro annuel d’UADV !
                            <br>
                        </h3>
                        <a href="#" class="link-magazine" data-toggle="modal" data-target="#calameo">
                            Cliquer ici pour lire un extrait du magazine
                        </a>
                        <h4 class="list-title-magazine">Un Mook Collector :</h4>
                        <ul class="list-items-magazine">
                            <li>300 pages de reportages et de carnets de voyages.</li>
                            <li>Des destinations testées et approuvées par nos journalistes.</li>
                            <li>Des fiches pratiques d'exception et détachables.</li>
                            <li>Des gooddies : 5 dessins originaux by Urban Sketchers</li>
                        </ul>
                        <p class="reduction-magazine">
                            Bénéficiez d’une réduction de 20% avec le code BIENVENUE jusqu’au 15/06/2018.
                        </p>
                        <div class="buy-magazine">
                            <a href="#" class="btn btn-primary btn-lg float-right">Commander</a>
                        </div>
                    </div>
                    <div class="col-md-6 magazine-photo">
                        <a href="#" data-toggle="modal" data-target="#calameo">
                            <img src="assets/img/uadv-couv.jpg" alt="magazine">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">
                            Les recommandations du jour
                        </h2>
                        <h3 class="subtitle">
                            5 heures 43 minutes 30 secondes jusqu'à la prochaine sélection
                        </h3>
                    </div>
                    <?php
                        publicListArticle($pdo, 6);
                    ?>
                    <div class="col-md-12 d-flex justify-content-center btn-box">
                        <a href="#" class="btn btn-primary btn-lg">Voir plus de recommandations</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="twitter-feed">
            <div class="container">
                <h2 class="title">
                    Actualités &amp; Réseaux
                </h2>
                <h3 class="subtitle">
                    Suivez en direct l’actualité des companies aériennes partenaires
                </h3>

                <div class="demo" style="overflow: auto">
                    <?php
                    require_once "includes/connection.php";
                    $sql = "SELECT 
                    `countname`
                    FROM
                    twitter
                    ;";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $twitter = new TwitterOAuth("nVqUnjKRE9Mn9FcKEn4GF03Xy", "1Y9W9P2j8Bbkx35BmQlG90R4Gkzreef4PgFDgYJl78OxyZXMJV", null, $access_token);

                        while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):
                        $tweets = $twitter->get('statuses/user_timeline', [
                            'screen_name' => $row['countname'],
                            'include_rts' => false,
                            'exclude_replies' => false,
                            'count' => 50// On est obligé de filtrer après coup (cf doc)
                        ]);
                        if (isset($tweets3)){
                            $tweets3 = array_merge($tweets3, $tweets);
                        } else {
                            $tweets3 = $tweets;
                        }

                        endwhile;
                    function sortFunction( $a, $b ) {
                        return strtotime($a->created_at) - strtotime($b->created_at);
                    }
                    usort($tweets3, "sortFunction");
                    $tweets3 = array_reverse($tweets3);
                     foreach($tweets3 as $tweet): ?>
                        <img src="<?= $tweet->user->profile_image_url?>" alt="">
                        <small>
                            <a href="https://twitter.com/<?= $tweet->user->screen_name?>"><?= $tweet->user->name; ?>@<?= $tweet->user->screen_name; ?></a>
                        </small>
                        <li><?=$tweet->text; ?></li>
                        <small>
                            <time class="timeago" datetime="<?=$tweet->created_at; ?>"></time>
                        </small> <br>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="calameo">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Extrait du magazine</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <div style="text-align:center;"><iframe src="https://fr.calameo.com/read/0009736099b342a1a3244" class="calameo" frameborder="0" scrolling="no" allowtransparency allowfullscreen style="margin:0 auto;"></iframe>
                                <div style="margin:4px 0px 8px;"></div>
                            </div>
                        </p>
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
