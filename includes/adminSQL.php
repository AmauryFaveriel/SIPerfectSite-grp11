<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 13:42
 */

/**
 * @param PDO $pdo
 * @return array
 */
function adminListArticleSQL(PDO $pdo)
{
    $requete="
    SELECT
    id,
    title
    FROM
    `article`
    ;";
    $stmt = $pdo -> prepare($requete);
    $stmt -> execute();
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param PDO $pdo
 * @return mixed
 */
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

/**
 * @param PDO $pdo
 */
function adminAddArticleSQL(PDO $pdo): void
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

/**
 * @param PDO $pdo
 */
function adminDeleteArticleSQL(PDO $pdo): void
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

/**
 * @param PDO $pdo
 */
function adminEditArticleSQL(PDO $pdo): void
{
    $requete="
    UPDATE
    `article`
    SET
    title = :title, 
    slug = :slug,
    content = :content,
    imgLink = :imgLink,
    imgAlt = :imgAlt
    WHERE
    id = :id
    ;";
    $stmt = $pdo -> prepare($requete);
    $stmt->bindValue(':id', $_POST['page']['id']);
    $stmt->bindValue(':title', $_POST['page']['title']);
    $stmt->bindValue(':slug', $_POST['page']['slug']);
    $stmt->bindValue(':content', $_POST['page']['content']);
    $stmt->bindValue(':imgLink', $_POST['page']['imgLink']);
    $stmt->bindValue(':imgAlt', $_POST['page']['imgAlt']);
    $stmt->execute();
}
