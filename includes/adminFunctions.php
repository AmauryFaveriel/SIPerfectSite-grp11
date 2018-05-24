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
    <title>Document</title>
</head>
<body>

<?php

}

/**
 * Footer for admin page
 */
function adminFooter()
{
?>
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
    <a href="../admin/index.php?action=adminListArticle">Articles</a><br>
    <a href="../admin/index.php?action=adminListCards">Fiches pratiques</a><br>
    <a href="../admin/index.php?action=adminListPartners">Partenaires</a><br>
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
    displayHomeLink();
    ?>
        <h1>Liste articles</h1>
        <a href="../admin/index.php?action=adminAddArticle">Ajouter un article</a>
        <ul>
        <?php foreach ($data as $page):?>
            <li>
                <h2><?=$page['title']?></h2>
                <a href="../admin/index.php?action=adminShowArticle&id=<?=$page['id']?>">Détails</a>
            </li>
        <?php endforeach; ?>
        </ul>
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
    displayHomeLink();
    ?>
    <h1>Liste fiches pratiques</h1>
    <a href="../admin/index.php?action=adminAddCards">Ajouter une fiche pratique</a>
    <ul>
        <?php foreach ($data as $page):?>
            <li>
                <h2><?=$page['title']?></h2>
                <a href="../admin/index.php?action=adminShowCards&id=<?=$page['id']?>">Détails</a>
            </li>
        <?php endforeach; ?>
    </ul>
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
        <label for="page[category]">Category :</label><input type="text" name="page[category]" id="page[category]"><br>
        <label for="page[adress]">Adresse :</label><input type="text" name="page[adress]" id="page[adress]"><br>
        <label for="page[note]">Note :</label><input type="number" name="page[note]" id="page[note]"><br>
        <label for="page[description]">Description :</label><textarea name="page[description]" id="page[description]"></textarea><br>
        <label for="page[imgLink]">Image (lien) :</label><input type="text" name="page[imgLink]" id="page[imgLink]"><br>
        <label for="page[imgAlt]">Nom image :</label><input type="text" name="page[imgAlt]" id="page[imgAlt]"><br>
        <label for="page[city]">Ville :</label><input type="text" name="page[city]" id="page[city]"><br>
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
    displayHomeLink();
    ?>
    <h1>Liste partenaires</h1>
    <a href="../admin/index.php?action=adminAddPartners">Ajouter un partenaire</a>
    <ul>
        <?php foreach ($data as $page):?>
            <li>
                <img src="<?=$page['imgLink']?>" alt="<?=$page['imgAlt']?>">
                <a href="../admin/index.php?action=adminShowPartners&id=<?=$page['id']?>">Détails</a>
            </li>
        <?php endforeach; ?>
    </ul>
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

/**
 *
 */
function displayHomeLink()
{
?>
    <a href="../admin/index.php">&lt; Accueil</a>
<?php
}
