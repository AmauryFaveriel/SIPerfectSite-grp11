<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 11:09
 */

function publicListCards(PDO $pdo): array
{
    $requete="
    SELECT
    `title`,
    `imgLink`,
    `imgAlt`,
    `city`,
    `country`,
    `link`
    FROM
    `cards`
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

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

/**
 * @param PDO $pdo
 * @return array
 */
function publicListCardsSQL(PDO $pdo)
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
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function publicSelectedListCardsSQL(PDO $pdo, string $city, string $category)
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
    city = :city
    AND 
    category = :category
    ;";
    $stmt=$pdo->prepare($requete);
    $stmt->bindValue(':city', $city, PDO::PARAM_STR);
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