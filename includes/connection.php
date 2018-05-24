<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 11:10
 */

try{
    $pdo = new PDO('mysql:host=localhost;dbname=sips', 'root', '');
    $pdo -> exec("SET NAMES UTF8");
} catch (PDOException $exception) {
    die($exception -> getMessage());
}