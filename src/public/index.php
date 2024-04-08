<?php

use app\RequestWrapper;

require_once '../app/RequestWrapper.php';

session_start();
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

$page = RequestWrapper::get('page');

if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] === $_SESSION['name']) {
    switch ($page) {
        case 'home':
        case 'prices':
        case 'contacts':
            include(VIEWS_PATH . $page . '.php');
            break;
        case 'tasks':
            include(VIEWS_PATH . 'tasksOutput.php');
            break;
        default:
            include(VIEWS_PATH . 'login.php');
            break;
    }
} else {
    include(VIEWS_PATH . 'login.php');
}

