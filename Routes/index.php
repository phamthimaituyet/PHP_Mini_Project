<?php
require '../vendor/autoload.php';

require '../Controllers/UserController.php';
require '../Controllers/HomeController.php';

session_start();
$page = 'home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

switch ($page) {
    case 'home':
        $home = new HomeController();
        $home->showAllNote();
        break;
    case 'home/create':
        $home = new HomeController();
        $home->createNote($_GET['create-note']);
        break;
    case 'home/delete':
        $home = new HomeController();
        $home->deleteNote($_GET['delete']);
        break;
    case 'login':
        $user = new UserController();
        $user->login();
        break;
    case 'register':
        $user = new UserController();
        $user->register();
        break;
    default:
        echo 'có lỗi';
        echo $page ;
        break;
}