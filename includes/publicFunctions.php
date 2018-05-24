<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 11:44
 */

require_once 'publicSQL.php';

function publicHeader()
{
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img class="logo" src="assets/img/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="articles.php">Nos articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fichespratiques.php">Nos fiches pratiques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="boiteaimages.php">Boîte à images</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TOP 100
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="top100hotels.php">Meilleurs Hôtels</a>
                        <a class="dropdown-item" href="#">Meilleurs Restaurants</a>
                        <a class="dropdown-item" href="#">Meilleurs SPAs & Thalassos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Nous contacter</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher..." aria-label="Rechercher...">
                <button class="btn btn-outline-dark mr-sm-2 btn-search" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>

<?php
}

function publicFooter($pdo)
{
$data = publicFooterSQL($pdo)
?>
    <div class="partners">
        <div class="container">
            <div class="display-partners">
                <a href="#"><img src="assets/img/vinci-airports.png" alt="Vinci Airports"></a>
                <a href="#"><img src="assets/img/paris-airport.png" alt="Paris Aeroport"></a>
                <a href="#"><img src="assets/img/iata.png" alt="IATA"></a>
                <a href="#"><img src="assets/img/tripadvisor.png" alt="TripAdvisor"></a>
                <a href="#"><img src="assets/img/gopro.png" alt="GoPro"></a>
                <a href="#"><img src="assets/img/Canon_logo.png" alt="Canon"></a>
            </div>
        </div>
    </div>

    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <ul class="menu">
                        <li>
                            32 rue des Peupliers,<br> 92100 Boulogne <br> France
                        </li>
                    </ul>
                    <ul class="menu">
                        <li>
                            <a href="#">A propos</a>
                        </li>
                        <li>
                            <a href="#">C.G.V</a>
                        </li>
                        <li>
                            <a href="#">Mentions légales</a>
                        </li>
                        <li>
                            <a href="#">Publicité</a>
                        </li>
                    </ul>
                    <ul class="menu">
                        <li>
                            <a href="#">Devenir panéliste</a>
                        </li>
                        <li>
                            <a href="#">Abonnements</a>
                        </li>
                        <li>
                            <a href="#">Archives</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">Plan de Site</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <div class="newsletter">
                        <h3 class="title">
                            Inscrivez-vous à la newsletter quotidienne de UADV afin de recevoir des offres personnalisées !
                            <br>
                            <a href="#">Consulter notre politique de confidentialité.</a>
                            <div class="input-group mt-3">
                                <input type="email" class="form-control" placeholder="Votre adresse mail..." aria-label="Votre adresse mail..." aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" style="padding: 10px 14px;">Envoyer</button>
                                </div>
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="flex">
                <div class="left">
                    <img class="logo" src="assets/img/logo-white.png" alt="logo Une Année De Voyages">
                    <span>2018 - Tous droits réservés</span>
                </div>
                <div class="right">
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php
}

function publicListArticle(PDO $pdo, int $nb)
{
    if(isset($_GET['category'])){
        $data = publicSelectedListArticleSQL($pdo, $nb);
    } else {
        $data = publicListArticleSQL($pdo, $nb);
    }
    foreach ($data as $item):?>
        <div class="col-md-4 news-u">
            <div class="miniature">
                <img src="assets/img/indonesia.jpg" alt="miniature">
            </div>
            <h3><a href="article.php?id=<?=$item['id']?>"><?=$item['title']?></a></h3>
            <h5>Temps de lecture : 6 minutes</h5>
        </div>
    <?php endforeach;
}

function publicTopListCards(PDO $pdo, string $category)
{
    $data =publicTopListCardsSQL($pdo, $category);
    $index = 1;
    foreach ($data as $item): ?>
        <div class="col-md-12 item">
            <div class="left">
                <div class="left-2">
                    <div class="circle">
                        <?=$index?>
                    </div>
                </div>
                <div class="right-2">
                    <h3><?=$item['title']?></h3>
                    <h5><?=$item['city']?>, <?=$item['country']?></h5>
                    <a href="#"><?=$item['link']?> <i class="fas fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="right">
                <img src="assets/img/hotels.jpg" alt="miniature">
            </div>
        </div>
        <?php
        $index++;
        endforeach;
}

function publicListCards(PDO $pdo)
{
    if(isset($_GET['category'])){
        $data = publicSelectedListCardsSQL($pdo, $_GET['category']);
    } else {
        $data = publicListCardsSQL($pdo);
    }
    foreach ($data as $item):
    ?>
    <div class="col-lg-4 col-md-6 col-md-sm-12 item">
        <div class="head">
            <div class="left">
                <h3 class="title"><?=$item['title']?></h3>
                <div class="note">
                    <?php
                        for ($i=0; $i<$item['note']; $i++){
                            echo '<i class="fas fa-star"></i>';
                        }
                        for ($i=0; $i<5-$item['note']; $i++){
                            echo'<i class="far fa-star"></i>';
                        }
                    ?>
                </div>
                <span class="date-open">
                    <i class="far fa-clock"></i> <?=$item['opening']?>
                </span>
                <span class="date-close">
                    <i class="fas fa-clock"></i> <?=$item['closing']?>
                </span>
            </div>
            <div class="right">
                <img src="<?=$item['imgLink']?>" alt="<?=$item['imgAlt']?>">
            </div>
        </div>
        <p class="description"><?=nl2br($item['description'])?></p>
        <div class="foot">
            <div class="left">
                <a href="tel:33142887575" class="phone">
                    <i class="fas fa-phone-square"></i> <?=$item['nbTel']?>
                </a>
                <h5 class="adress">
                    <?=$item['adress']?><br>
                    <?=$item['city']?> - <?=$item['country']?>
                </h5>
            </div>
            <div class="right">
                <a href="#" class="btn btn-primary">Réserver</a>
            </div>
        </div>
    </div>
        <?php
    endforeach;

}

function test(PDO $pdo)
{
    if(isset($_POST['select'])){
?>
        <form action="" method="post">
            <input type="text" name="select[city]" value="<?=$_POST['select']['city']?>"><br>
            <input type="text" name="select[category]" value="<?=$_POST['select']['category']?>"><br>
            <input type="submit" value="Rechercher">
        </form>
<?php
        $data = publicTopListCardsSQL($pdo, $_POST['select']['category']);
        if (empty($data)){
            echo 'ERREUR PAS DE FICHE';
        }
        foreach ($data as $datum): ?>
            <p><?=$datum['title']?></p>
        <?php endforeach;
    } else {
?>
        <form action="" method="post">
        <input type="text" name="select[city]"><br>
        <input type="text" name="select[category]"><br>
        <input type="submit" value="Rechercher">
    </form>
<?php
    }
}