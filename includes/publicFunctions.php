<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 11:44
 */

require_once 'publicSQL.php';

function publicHeader(){
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

function publicFooter($pdo){
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