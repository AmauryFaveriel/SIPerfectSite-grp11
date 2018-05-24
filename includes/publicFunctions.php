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

function publicFooter($pdo)
{
$data = publicFooterSQL($pdo)
?>
<footer>
    <?php foreach ($data as $page): ?>
        <a href="<?=$page['link']?>">
            <img src="../includes/img/<?=$page['imgLink']?>" alt="<?=$page['imgAlt']?>">
        </a>
    <?php endforeach; ?>
</footer>
</body>
</html>
<?php
}

function test(PDO $pdo)
{?>
<?php
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