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