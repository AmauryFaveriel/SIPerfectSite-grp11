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

$action = $_GET['action'] ?? $_POST['action'] ?? PAGE_DEFAULT;

switch($action) {

    case 'adminListArticle':
        adminListArticle($pdo);
        break;
    case 'adminShowArticle':
        adminShowArticle($pdo);
        break;
    case 'adminAddArticle':
        adminAddArticle($pdo);
        break;
    case 'adminDeleteArticle':
        adminDeleteArticle($pdo);
        break;
    case 'adminEditArticle':
        adminEditArticle($pdo);
        break;
    case 'list':
    default:
        adminList();
        break;
}
