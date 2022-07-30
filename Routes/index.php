<?php
require '../Controllers/UserController.php';
require '../Controllers/HomeController.php';

session_start();
$page = 'home';

if(isset($_GET['page'])){
    $page=$_GET['page'];
}

switch($page){
    case 'home':
        $home = new HomeController();
        $home->index();
        break;
    case 'login':
        $user = new UserController();
        $user->login();
        break;
    default:
        echo 'có lỗi';
        break;
}