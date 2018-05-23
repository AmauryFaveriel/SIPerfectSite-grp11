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

function publicListCardsSQL(PDO $pdo)
{
    $requete="
    SELECT
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