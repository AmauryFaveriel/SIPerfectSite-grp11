<?php
/**
 * Created by PhpStorm.
 * User: AmauryFaveriel
 * Date: 22/05/2018
 * Time: 11:05
 */

require_once 'adminSQL.php';

/**
 * Header for admin page
 */
function adminHeader()
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Panel Admin - Une Année De Voyages</title>
</head>
<body class="admin">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.php">UADV : Panel Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="../index.php" class="btn btn-outline-light">Aller sur le site</a>        
    </nav>
    <div class="container">

<?php

}

/**
 * Footer for admin page
 */
function adminFooter()
{
?>
    </div>
</body>
</html>
<?php
}

/**
 * Base menu for admin page
 * return void
 */
function adminList()
{
    adminHeader();
?>
   

    <h1>Bienvenue sur le Panel Admin</h1>
    <p class="mb-5">Utilisez les liens ci-dessous pour modifier le contenu du site :</p>
    <div class="list-group">
        <a href="../admin/index.php?action=adminListArticle" class="list-group-item list-group-item-action">Articles</a>
        <a href="../admin/index.php?action=adminListCards" class="list-group-item list-group-item-action">Fiches pratiques</a>
        <a href="../admin/index.php?action=adminListPartners" class="list-group-item list-group-item-action">Partenaires</a>
        <a href="../admin/index.php?action=adminListTwitter" class="list-group-item list-group-item-action">Fil d'actualité (Twitter)</a>
    </div>
<?php
    adminFooter();
}

/**
 * @param PDO $pdo
 */
function adminListArticle(PDO $pdo): void
{
    $data = adminListArticleSQL($pdo);
    adminHeader();
    
    ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../admin/index.php">Panel Admin : Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liste des articles</li>
            </ol>
        </nav>
        <div class="row mb-3">
           <div class="col-md-8">
               <h1>Liste des articles</h1>
           </div>
           <div class="col-md-4">
               <a href="../admin/index.php?action=adminAddArticle" class="btn btn-success float-right mt-3">Ajouter un article <i class="fas fa-plus ml-2"></i></a>
           </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom de l'article</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $page):?>
                    <tr>
                        <th scope="row"><?=$page['id']?></th>
                        <td><?=$page['title']?></td>
                        <td><a href="../admin/index.php?action=adminShowArticle&id=<?=$page['id']?>" class="btn btn-secondary">Voir</a><a href="../admin/index.php?action=adminEditArticle&id=<?=$page['id']?>" class="btn btn-success">Modifier</a><a href="../admin/index.php?action=adminDeleteArticle&id=<?=$page['id']?>" class="btn btn-danger">Supprimer</a></td>
                    </tr>            
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php
}

/**
 * @param PDO $pdo
 */
function adminShowArticle(PDO $pdo): void
{
    $data = adminShowArticleSQL($pdo);
?>
    <a href="../admin/index.php?action=adminListArticle">Liste d'articles</a><br>
    <a href="../admin/index.php?action=adminEditArticle&id=<?=$data['id']?>">Editer</a><br>
    <a href="../admin/index.php?action=adminDeleteArticle&id=<?=$data['id']?>">Supprimer</a><br>
    <h1><?=$data['title']?></h1>
    <h2><?=$data['slug']?></h2>
    <p><?=$data['category']?></p>
    <img src="<?=$data['imgLink']?>" alt="<?=$data['imgAlt']?>">
    <p><?=nl2br($data['content'])?></p>
<?php
}

/**
 * @param PDO $pdo
 */
function adminAddArticle(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminAddArticleSQL($pdo);
        header('Location:index.php?action=adminListArticle');
        exit;
    }
    ?>
    <a href="../admin/index.php?action=adminListArticle">Liste d'articles</a><br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="page[title]">Titre :</label><input type="text" name="page[title]" id="page[title]"><br>
        <label for="page[slug]">Lien :</label><input type="text" name="page[slug]" id="page[slug]"><br>
        <label for="page[category]">Categorie :</label><input type="text" name="page[category]" id="page[category]"><br>
        <label for="page[content]">Texte :</label><textarea name="page[content]" id="page[content]"></textarea><br>
        <label for="page[imgLink]">Image (lien) :</label><input type="text" name="page[imgLink]" id="page[imgLink]"><br>
        <label for="page[imgAlt]">Nom image :</label><input type="text" name="page[imgAlt]" id="page[imgAlt]"><br>
        <input type="submit" value="Ajouter">
    </form>
<?php
}

/**
 * @param PDO $pdo
 */
function adminDeleteArticle(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminDeleteArticleSQL($pdo);
        header('Location:index.php?action=adminListArticle');
        exit;
    }
    $data = adminShowArticleSQL($pdo);
    ?>
    <a href="../admin/index.php?action=adminShowArticle&id=<?=$data['id']?>">Retour</a>
    <h1>Voulez-vous supprimer <?=$data['title']?> ?</h1>
    <form action="" method="post">
        <input type="hidden" name="page[id]" value="<?=$data['id']?>">
        <input type="submit" value="supprimer">
    </form>
<?php
}

/**
 * @param PDO $pdo
 */
function adminEditArticle(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminEditArticleSQL($pdo);
        header('Location:index.php?action=adminListArticle');
        exit;
    }
    $data = adminShowArticleSQL($pdo);
    ?>
    <a href="../admin/index.php?action=adminShowArticle&id=<?=$data['id']?>">Retour</a>
    <form action="" method="post">
        <input type="hidden" name="page[id]" value="<?=$data['id']?>">
        <label for="page[title]">Titre :</label><input type="text" name="page[title]" id="page[title]" value="<?=$data['title']?>"><br>
        <label for="page[slug]">Lien :</label><input type="text" name="page[slug]" id="page[slug]" value="<?=$data['slug']?>"><br>
        <label for="page[content]">Texte :</label><textarea name="page[content]" id="page[content]"><?=$data['content']?></textarea><br>
        <label for="page[imgLink]">Image (lien) :</label><input type="text" name="page[imgLink]" id="page[imgLink]" value="<?=$data['imgLink']?>"><br>
        <label for="page[imgAlt]">Nom image :</label><input type="text" name="page[imgAlt]" id="page[imgAlt]" value="<?=$data['imgAlt']?>"><br>
        <input type="submit" value="Modifier">
    </form>
<?php
}

/**
 * @param PDO $pdo
 */
function adminListCards(PDO $pdo): void
{
    $data = adminListCardsSQL($pdo);
    adminHeader();
    
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../admin/index.php">Panel Admin : Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liste des fiches pratiques</li>
        </ol>
    </nav>
    <div class="row mb-3">
        <div class="col-md-8">
            <h1>Liste des fiches pratiques</h1>
        </div>
        <div class="col-md-4">
            <a href="../admin/index.php?action=adminAddCards" class="btn btn-success float-right mt-3">Ajouter une fiche pratique <i class="fas fa-plus ml-2"></i></a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom de la fiche pratique</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $page):?>
            <tr>
                <th scope="row"><?=$page['id']?></th>
                <td><?=$page['title']?></td>
                <td><a href="../admin/index.php?action=adminShowCards&id=<?=$page['id']?>" class="btn btn-secondary">Voir</a><a href="../admin/index.php?action=adminEditCards&id=<?=$page['id']?>" class="btn btn-success">Modifier</a><a href="../admin/index.php?action=adminDeleteCards&id=<?=$page['id']?>" class="btn btn-danger">Supprimer</a></td>
            </tr>            
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
}

/**
 * @param PDO $pdo
 */
function adminShowCards(PDO $pdo): void
{
    $data = adminShowCardsSQL($pdo);
    ?>
    <a href="../admin/index.php?action=adminListCards">Liste fiches pratiques</a><br>
    <a href="../admin/index.php?action=adminEditCards&id=<?=$data['id']?>">Editer</a><br>
    <a href="../admin/index.php?action=adminDeleteCards&id=<?=$data['id']?>">Supprimer</a><br>
    <h1><?=$data['title']?></h1>
    <h2><?=$data['slug']?></h2>
    <p><?=$data['category']?></p>
    <p><?=$data['adress']?></p>
    <img src="<?=$data['imgLink']?>" alt="<?=$data['imgAlt']?>">
    <p><?=nl2br($data['description'])?></p>
    <p><?=$data['note']?></p>
    <p><?=$data['city']?></p>
    <p><?=$data['country']?></p>
    <p><?=$data['opening']?></p>
    <p><?=$data['closing']?></p>
    <p><?=$data['link']?></p>
    <p><?=$data['nbTel']?></p>

    <?php
}

/**
 * @param PDO $pdo
 */
function adminAddCards(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminAddCardsSQL($pdo);
        header('Location:index.php?action=adminListCards');
        exit;
    }
    ?>
    <a href="../admin/index.php?action=adminListCards">Liste fiches pratiques</a><br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="page[title]">Titre :</label><input type="text" name="page[title]" id="page[title]"><br>
        <label for="page[slug]">Lien :</label><input type="text" name="page[slug]" id="page[slug]"><br>
        <label for="page[category]">Categorie :</label>
        <select name="page[category]" id="page[category]">
            <option value="hebergement">hebergement</option>
            <option value="gastronomie">gastronomie</option>
            <option value="place">place</option>
            <option value="shopping">shopping</option>
            <option value="culturel">culturel</option>
            <option value="bienEtre">bienEtre</option>
            <option value="sport">sport</option>
            <option value="fly">fly</option>
        </select><br>
        <label for="page[adress]">Adresse :</label><input type="text" name="page[adress]" id="page[adress]"><br>
        <label for="page[note]">Note :</label><input type="number" name="page[note]" id="page[note]"><br>
        <label for="page[description]">Description :</label><textarea name="page[description]" id="page[description]"></textarea><br>
        <label for="page[imgLink]">Image (lien) :</label><input type="text" name="page[imgLink]" id="page[imgLink]"><br>
        <label for="page[imgAlt]">Nom image :</label><input type="text" name="page[imgAlt]" id="page[imgAlt]"><br>
        <label for="page[city]">Ville :</label>
        <select id="page[city]" name="page[city]">
            <option value="Paris" selected>Paris</option>
            <option value="Tokyo">Tokyo</option>
            <option value="Rio">Rio</option>
            <option value="Moscou">Moscou</option>
            <option value="Berlin">Berlin</option>
            <option value="Nairobi">Nairobi</option>
            <option value="Denver">Denver</option>
            <option value="Helsinki">Helsinki</option>
            <option value="Oslo">Oslo</option>
        </select><br>
        <label for="page[country]">Pays :</label><input type="text" name="page[country]" id="page[country]"><br>
        <label for="page[opening]">Ouverture :</label><input type="text" name="page[opening]" id="page[opening]"><br>
        <label for="page[closing]">Fermeture :</label><input type="text" name="page[closing]" id="page[closing]"><br>
        <label for="page[link]">Lien :</label><input type="text" name="page[link]" id="page[link]"><br>
        <label for="page[nbTel]">Numéro téléphone :</label><input type="tel" name="page[nbTel]" id="page[nbTel]"><br>
        <input type="submit" value="Ajouter">
    </form>
    <?php
}

/**
 * @param PDO $pdo
 */
function adminDeleteCards(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminDeleteCardsSQL($pdo);
        header('Location:index.php?action=adminListCards');
        exit;
    }
    $data = adminShowCardsSQL($pdo);
    ?>
    <a href="../admin/index.php?action=adminShowCards&id=<?=$data['id']?>">Retour</a>
    <h1>Voulez-vous supprimer <?=$data['title']?> ?</h1>
    <form action="" method="post">
        <input type="hidden" name="page[id]" value="<?=$data['id']?>">
        <input type="submit" value="supprimer">
    </form>
    <?php
}

/**
 * @param PDO $pdo
 */
function adminEditCards(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminEditCardsSQL($pdo);
        header('Location:index.php?action=adminListCards');
        exit;
    }
    $data = adminShowCardsSQL($pdo);
    ?>
    <a href="../admin/index.php?action=adminShowCards&id=<?=$data['id']?>">Retour</a>
    <form action="" method="post">
        <input type="hidden" name="page[id]" value="<?=$data['id']?>">
        <label for="page[title]">Titre :</label><input type="text" name="page[title]" id="page[title]" value="<?=$data['title']?>"><br>
        <label for="page[slug]">Lien :</label><input type="text" name="page[slug]" id="page[slug]" value="<?=$data['slug']?>"><br>
        <label for="page[category]">Categorie :</label><input type="text" name="page[category]" id="page[category]" value="<?=$data['category']?>"><br>
        <label for="page[adress]">Adresse :</label><input type="text" name="page[adress]" id="page[adress]" value="<?=$data['adress']?>"><br>
        <label for="page[note]">Note :</label><input type="text" name="page[note]" id="page[note]" value="<?=$data['note']?>"><br>
        <label for="page[content]">Description :</label><textarea name="page[description]" id="page[description]"><?=$data['description']?></textarea><br>
        <label for="page[imgLink]">Image (lien) :</label><input type="text" name="page[imgLink]" id="page[imgLink]" value="<?=$data['imgLink']?>"><br>
        <label for="page[imgAlt]">Nom image :</label><input type="text" name="page[imgAlt]" id="page[imgAlt]" value="<?=$data['imgAlt']?>"><br>
        <label for="page[city]">Ville :</label><input type="text" name="page[city]" id="page[city]" value="<?=$data['city']?>"><br>
        <label for="page[country]">Pays :</label><input type="text" name="page[country]" id="page[country]" value="<?=$data['country']?>"><br>
        <label for="page[opening]">Ouverture :</label><input type="text" name="page[opening]" id="page[opening]" value="<?=$data['opening']?>"><br>
        <label for="page[closing]">Fermeture :</label><input type="text" name="page[closing]" id="page[closing]" value="<?=$data['closing']?>"><br>
        <label for="page[link]">Lien :</label><input type="text" name="page[link]" id="page[link]" value="<?=$data['link']?>"><br>
        <label for="page[nbTel]">Numéro téléphone :</label><input type="text" name="page[nbTel]" id="page[nbTel]" value="<?=$data['nbTel']?>"><br>
        <input type="submit" value="Modifier">
    </form>
    <?php
}

function adminListPartners(PDO $pdo)
{
    $data = adminListPartnersSQL($pdo);
    adminHeader();
    
    ?>
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../admin/index.php">Panel Admin : Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liste des partenaires</li>
        </ol>
    </nav>
    <div class="row mb-3">
        <div class="col-md-8">
            <h1>Liste des partenaires</h1>
        </div>
        <div class="col-md-4">
            <a href="../admin/index.php?action=adminAddPartners" class="btn btn-success float-right mt-3">Ajouter un partenaire <i class="fas fa-plus ml-2"></i></a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom du partenaire</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $page):?>
            <tr>
                <th scope="row"><?=$page['id']?></th>
                <td><?=$page['imgAlt']?></td>
                <td><img src="<?=$page['imgLink']?>" alt="<?=$page['imgAlt']?>"></td>
                <td><a href="../admin/index.php?action=adminDeletePartners&id=<?=$page['id']?>" class="btn btn-danger">Supprimer</a></td>
            </tr>            
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
}

/**
 * @param PDO $pdo
 */
function adminShowPartners(PDO $pdo): void
{
    $data = adminShowPartnersSQL($pdo);
    ?>
    <a href="../admin/index.php?action=adminListPartners">Liste partenaires</a><br>
    <a href="../admin/index.php?action=adminDeletePartners&id=<?=$data['id']?>">Supprimer</a><br>
    <img src="<?=$data['imgLink']?>" alt="<?=$data['imgAlt']?>">
    <p><?=$data['link']?></p>
    <?php
}

/**
 * @param PDO $pdo
*/
function adminAddPartners(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminAddPartnersSQL($pdo);
        header('Location:index.php?action=adminListPartners');
        exit;
    }
    ?>
    <a href="../admin/index.php?action=adminListPartners">Liste partenaires</a><br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="page[link]">Lien :</label><input type="text" name="page[link]" id="page[link]"><br>
        <label for="page[imgLink]">Image (lien) :</label><input type="text" name="page[imgLink]" id="page[imgLink]"><br>
        <label for="page[imgAlt]">Nom image :</label><input type="text" name="page[imgAlt]" id="page[imgAlt]"><br>
        <input type="submit" value="Ajouter">
    </form>
    <?php
}

/**
 * @param PDO $pdo
 */
function adminDeletePartners(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminDeletePartnersSQL($pdo);
        header('Location:index.php?action=adminListPartners');
        exit;
    }
    $data = adminShowPartnersSQL($pdo);
    ?>
    <a href="../admin/index.php?action=adminShowPartners&id=<?=$data['id']?>">Retour</a>
    <h1>Voulez-vous supprimer ?</h1>
    <img src="<?=$data['imgLink']?>" alt="<?=$data['imgAlt']?>">
    <form action="" method="post">
        <input type="hidden" name="page[id]" value="<?=$data['id']?>">
        <input type="submit" value="supprimer">
    </form>
    <?php
}

function adminListTwitter(PDO $pdo)
{
    $data = adminListTwitterSQL($pdo);
    adminHeader();
    
    ?>
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../admin/index.php">Panel Admin : Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liste des comptes liés au fil d'actualité (Twitter)</li>
        </ol>
    </nav>
    <div class="row mb-3">
        <div class="col-md-8">
            <h1>Liste des comptes liés au fil d'actualité (Twitter)</h1>
        </div>
        <div class="col-md-4">
            <a href="../admin/index.php?action=adminAddTwitter" class="btn btn-success float-right mt-3">Ajouter un compte Twitter <i class="fas fa-plus ml-2"></i></a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom du compte</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $page):?>
            <tr>
                <th scope="row"><?=$page['id']?></th>
                <td><?=$page['countname']?></td>
                <td><a href="../admin/index.php?action=adminDeleteTwitter&id=<?=$page['id']?>" class="btn btn-danger">Supprimer</a></td>
            </tr>            
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
}

/**
 * @param PDO $pdo
 */
function adminAddTwitter(PDO $pdo): void
{
    if(isset($_POST['page'])){
        adminAddTwitterSQL($pdo);
        header('Location:index.php?action=adminListTwitter');
        exit;
    }
    ?>
    <a href="../admin/index.php?action=adminListTwitter">Liste fil actualité twitter</a><br>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="page[name]">Nom :</label><input type="text" name="page[name]" id="page[name]"><br>
        <input type="submit" value="Ajouter">
    </form>
    <?php
}

/**
 * @param PDO $pdo
 */
function adminDeleteTwitter(PDO $pdo): void
{
        adminDeleteTwitterSQL($pdo);
        header('Location:index.php?action=adminListTwitter');
        exit;
}

/**
 *
 */
function displayHomeLink()
{
?>
    <a href="../admin/index.php">&lt; Accueil</a>
<?php
}
