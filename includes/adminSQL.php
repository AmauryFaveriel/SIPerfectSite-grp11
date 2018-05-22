<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 13:42
 */

function adminListArticleSQL(PDO $pdo)
{
    $requete="
    SELECT
    id,
    title, 
    slug, 
    content, 
    imgLink, 
    imgAlt
    FROM
    `article`
    ;";
    $stmt = $pdo -> prepare($requete);
    $stmt -> execute();
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

function adminShowArticleSQL(PDO $pdo)
{
    $requete="
    SELECT
    id,
    title, 
    slug, 
    content, 
    imgLink, 
    imgAlt
    FROM
    `article`
    WHERE
    `id` = :id
    ;";
    $stmt = $pdo -> prepare($requete);
    $stmt -> bindValue(':id', $_GET['id']);
    $stmt -> execute();
    return $stmt -> fetch(PDO::FETCH_ASSOC);
}

function adminAddArticleSQL(PDO $pdo)
{
    $requete="
    INSERT INTO
    `article`
    (title, 
    slug, 
    content, 
    imgLink, 
    imgAlt) 
    VALUES 
    (:title, 
    :slug, 
    :content, 
    :imgLink, 
    :imgAlt)
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->bindValue(':title', htmlspecialchars($_POST['page']['title']), PDO::PARAM_STR);
    $stmt->bindValue(':slug', htmlspecialchars($_POST['page']['slug']), PDO::PARAM_STR);
    $stmt->bindValue(':content', htmlspecialchars($_POST['page']['content']), PDO::PARAM_STR);
    $stmt->bindValue(':imgLink', htmlspecialchars($_POST['page']['imgLink']), PDO::PARAM_STR);
    $stmt->bindValue(':imgAlt', htmlspecialchars($_POST['page']['imgAlt']), PDO::PARAM_STR);
    $stmt->execute();
}

function adminDeleteArticleSQL(PDO $pdo)
{
    $requete="
    DELETE FROM
    `article`
    WHERE
    `id` = :id 
    ;";
    $stmt = $pdo -> prepare($requete);
    $stmt -> bindValue(':id', $_POST['page']['id']);
    $stmt -> execute();
}
