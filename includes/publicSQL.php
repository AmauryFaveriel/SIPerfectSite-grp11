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