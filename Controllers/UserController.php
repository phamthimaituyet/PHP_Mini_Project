<?php
include 'BaseController.php';
include '../Models/User.php';
 
class UserController extends BaseController 
{ 
    public function login() 
    {
        $user = new User();
        
        $infor = $user->getUser();
        $this->load('login', compact('infor'));
        $this->show();
    }
}

?>