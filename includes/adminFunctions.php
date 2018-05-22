<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 11:05
 */

require_once 'adminSQL.php';

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

function adminListArticle(PDO $pdo)
{
    $data = adminListArticleSQL($pdo);
    adminHeader();
    ?>
        <h1>Liste articles</h1>
        <a href="../admin/index.php?action=adminAddArticle">Ajouter un article</a>
        <ul>
        <?php foreach ($data as $page):?>
            <li>
                <h2><?=$page['title']?></h2>
                <a href="../admin/index.php?action=adminEditArticle&id=<?=$page['id']?>">Editer</a>
                <a href="../admin/index.php?action=adminDeleteArticle&id=<?=$page['id']?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php
}

function adminAddArticle(PDO $pdo)
{
    if(isset($_POST['page'])){
        adminAddArticleSQL($pdo);
        header('Location:index.php');
        exit;
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="page[title]">Titre :</label><input type="text" name="page[title]" id="page[title]"><br>
        <label for="page[slug]">Lien :</label><input type="text" name="page[slug]" id="page[slug]"><br>
        <label for="page[content]">Texte :</label><textarea name="page[content]" id="page[content]"></textarea><br>
        <label for="page[imgLink]">Image :</label><input type="file" name="page[imgLink]" id="page[imgLink]"><br>
        <label for="page[imgAlt]">Nom image :</label><input type="text" name="page[imgAlt]" id="page[imgAlt]"><br>
        <input type="submit" value="Ajouter">
    </form>
<?php
}

function adminDeleteArticle(PDO $pdo)
{
    if(isset($_POST['page'])){
        adminDeleteArticleSQL($pdo);
        header('Location:index.php');
        exit;
    }
    $data = adminShowArticleSQL($pdo);
    ?>
    <h1>Voulez-vous supprimer <?=$data['title']?> ?</h1>
    <form action="" method="post">
        <input type="hidden" name="page[id]" value="<?=$data['id']?>"><br>
        <input type="submit" value="supprimer">
    </form>
<?php
}

