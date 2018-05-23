<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
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
    <a href="../admin/index.php?action=adminListCardsAirline">Fiches compagnies aériennes</a><br>
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
    <img src="<?=$data['imgLink']?>" alt="<?=$data['imgAlt']?>">
    <p><?=$data['content']?></p>
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
    displayHomeLink();
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="page[title]">Titre :</label><input type="text" name="page[title]" id="page[title]"><br>
        <label for="page[slug]">Lien :</label><input type="text" name="page[slug]" id="page[slug]"><br>
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

function displayHomeLink()
{
?>
    <a href="../admin/index.php">&lt; Accueil</a>
<?php
}
