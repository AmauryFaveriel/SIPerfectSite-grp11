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
    $stmt->bindValue(':title', htmlspecialchars($_POST['page']['title']), PDO::PARAM_STR);
    $stmt->bindValue(':slug', htmlspecialchars($_POST['page']['slug']), PDO::PARAM_STR);
    $stmt->bindValue(':content', htmlspecialchars($_POST['page']['content']), PDO::PARAM_STR);
    $stmt->bindValue(':imgLink', htmlspecialchars($_POST['page']['imgLink']), PDO::PARAM_STR);
    $stmt->bindValue(':imgAlt', htmlspecialchars($_POST['page']['imgAlt']), PDO::PARAM_STR);
    $stmt->execute();
}

/**
 * @param PDO $pdo
 * @return array
 */
function adminListCardsSQL(PDO $pdo)
{
    $requete="
    SELECT
    id,
    title
    FROM
    `cards`
    ;";
    $stmt = $pdo -> prepare($requete);
    $stmt -> execute();
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param PDO $pdo
 * @return mixed
 */
function adminShowCardsSQL(PDO $pdo)
{
    $requete="
    SELECT
    id,
    title,
    slug,
    category,
    adress,
    description,
    note,
    imgLink,
    imgAlt
    FROM
    `cards`
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
function adminAddCardsSQL(PDO $pdo): void
{
    $requete="
    INSERT INTO
    `cards`
    (title,
     slug,
     category, 
     adress, 
     description, 
     note, 
     imgLink, 
     imgAlt) 
    VALUES 
    (:title,
     :slug,
     :category,
     :adress,
     :description,
     :note,
     :imgLink,
     :imgAlt)
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->bindValue(':title', htmlspecialchars($_POST['page']['title']));
    $stmt->bindValue(':slug', htmlspecialchars($_POST['page']['slug']));
    $stmt->bindValue(':category', htmlspecialchars($_POST['page']['category']));
    $stmt->bindValue(':adress', htmlspecialchars($_POST['page']['adress']));
    $stmt->bindValue(':description', htmlspecialchars($_POST['page']['description']));
    $stmt->bindValue(':note', htmlspecialchars($_POST['page']['note']));
    $stmt->bindValue(':imgLink', htmlspecialchars($_POST['page']['imgLink']));
    $stmt->bindValue(':imgAlt', htmlspecialchars($_POST['page']['imgAlt']));
    $stmt->execute();
}

/**
 * @param PDO $pdo
 */
function adminDeleteCardsSQL(PDO $pdo): void
{
    $requete="
    DELETE FROM
    `cards`
    WHERE
    `id` = :id 
    ;";
    $stmt = $pdo -> prepare($requete);
    $stmt -> bindValue(':id', $_POST['page']['id']);
    $stmt -> execute();
}

function adminEditCardsSQL(PDO $pdo): void
{
    $requete="
    UPDATE
    `cards`
    SET
    title = :title, 
    slug = :slug,
    category = :category,
    adress = :adress,
    description = :description,
    note = :note,
    imgLink = :imgLink,
    imgAlt = :imgAlt
    WHERE
    id = :id
    ;";
    $stmt = $pdo -> prepare($requete);
    $stmt->bindValue(':id', htmlspecialchars($_POST['page']['id']));
    $stmt->bindValue(':title', htmlspecialchars($_POST['page']['title']));
    $stmt->bindValue(':slug', htmlspecialchars($_POST['page']['slug']));
    $stmt->bindValue(':category', htmlspecialchars($_POST['page']['category']));
    $stmt->bindValue(':adress', htmlspecialchars($_POST['page']['adress']));
    $stmt->bindValue(':description', htmlspecialchars($_POST['page']['description']));
    $stmt->bindValue(':note', htmlspecialchars($_POST['page']['note']));
    $stmt->bindValue(':imgLink', htmlspecialchars($_POST['page']['imgLink']));
    $stmt->bindValue(':imgAlt', htmlspecialchars($_POST['page']['imgAlt']));
    $stmt->execute();
}
