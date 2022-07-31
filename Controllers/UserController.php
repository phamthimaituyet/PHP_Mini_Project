<?php
include_once 'BaseController.php';
include_once '../Models/User.php';
 
class UserController extends BaseController 
{ 
    public function login() 
    {   
        $user = new User();
        if ($this->isPost()) {
            $request = $this->request();
            $login = $user->checkUserLogin($request);

            if($login){
                $_SESSION['name'] = $request['name'];
                $_SESSION['timeout'] = time();
                return header('Location: home');
            }
        }

        $this->show('login');
    }

    public function register()
    {
        $user = new User();
        if($this->isPost()) {
            $request = $this->request();
            $register = $user->singupUser($request);

            if($register){
                return header('Location: login');
            }
        }

        $this->show('register');
    }

}

?>