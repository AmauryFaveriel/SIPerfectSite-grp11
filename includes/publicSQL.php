<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 11:09
 */

/**
 * @param PDO $pdo
 * @return array
 */
function publicFooterSQL(PDO $pdo): array
{
    $requete="
    SELECT
    `imgLink`,
    `imgAlt`,
    `link`
    FROM
    `partners`
    ;";
    $stmt = $pdo->prepare($requete);
    $stmt -> execute();
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

function publicListArticleSQL(PDO $pdo, int $nb)
{
    $requete="
    SELECT
    id,
    title,
    imgLink,
    imgAlt
    FROM
    `article`
    ORDER BY
    id
    DESC
    LIMIT
    0,$nb
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function publicSelectedListArticleSQL(PDO $pdo, int $nb)
{
    $requete="
    SELECT
    id,
    title,
    imgLink,
    imgAlt
    FROM
    `article`
    WHERE
    category = :category
    ORDER BY
    id
    DESC
    LIMIT
    0,$nb
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->bindValue(':category', htmlspecialchars($_GET['category']));
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function publicShowArticleSQL(PDO $pdo)
{
    $requete="
    SELECT
    title,
    content,
    imgLink,
    imgAlt,
    category
    FROM
    article
    WHERE
    id = :id
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * @param PDO $pdo
 * @return array
 */
function publicListCardsSQL(PDO $pdo)
{
    $requete="
    SELECT
    title,
    city,
    country,
    imgLink,
    imgAlt,
    nbTel,
    adress,
    description,
    note,
    opening,
    closing
    FROM
    `cards`
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function publicSelectedListCardsSQL(PDO $pdo, string $category)
{
    $requete="
    SELECT
    title,
    city,
    country,
    imgLink,
    imgAlt,
    nbTel,
    adress,
    description,
    note,
    opening,
    closing
    FROM
    `cards`
    WHERE 
    category = :category
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->bindValue(':category', $category, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function publicTopListCardsSQL(PDO $pdo, string $category)
{
    $requete="
    SELECT
    id,
    title,
    city,
    country,
    imgLink,
    imgAlt,
    link
    FROM
    `cards`
    WHERE
    category = :category
    ORDER BY 
    note
    DESC
    LIMIT 
    0, 10
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->bindValue(':category', $category, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param PDO $pdo
 * @return mixed
 */
function publicShowCardsSQL(PDO $pdo)
{
    $requete="
    SELECT
    title,
    slug,
    category,
    adress,
    description,
    note,
    imgLink,
    imgAlt,
    city,
    country,
    opening,
    closing,
    link,
    nbTel
    FROM
    cards
    WHERE
    id = :id
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->bindValue(':id', $_POST['page']['id'], PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
