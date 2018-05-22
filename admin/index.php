<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 22/05/2018
 * Time: 10:52
 */

require_once '../includes/connection.php';
require_once '../includes/adminFunctions.php';

define("PAGE_DEFAULT", "list");

if(!isset($_GET['action'])){
    $action = PAGE_DEFAULT;
} else {
    $action = $_GET['action'];
}

switch($action) {

    case 'adminListArticle':
        adminListArticle($pdo);
        break;
    case 'adminAddArticle':
        adminAddArticle($pdo);
        break;
    case 'adminDeleteArticle':
        adminDeleteArticle($pdo);
        break;
    case 'list':
    default:
        adminList();
        break;
}
