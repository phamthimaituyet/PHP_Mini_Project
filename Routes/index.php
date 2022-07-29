<?php
require '../Controllers/UserController.php';

$page = 'home';

if(isset($_GET['page'])){
    $page=$_GET['page'];
}

switch($page){
    case 'home':

        break;
    case 'login':
        $user = new UserController();
        $user->login();
        break;
    default:
        echo 'có lỗi';
        break;
}