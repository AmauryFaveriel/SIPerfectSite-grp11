<?php
    require_once 'includes/connection.php';
    require 'includes/publicFunctions.php';
    require "vendor/autoload.php";
    use Abraham\TwitterOAuth\TwitterOAuth;
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
    <a href="admin/index.php">Panneau administrateur</a>
<?php
    publicFooter($pdo);
?>
</body>
</html>

