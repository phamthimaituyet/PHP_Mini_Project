<?php
include 'BaseController.php';
include '../Models/User.php';
 
class UserController extends BaseController 
{ 
    public function login() 
    {
        $user = new User();
        
        $infor = $user->getUser();
        include '../Views/Pages/login.php';
    }
}

?>