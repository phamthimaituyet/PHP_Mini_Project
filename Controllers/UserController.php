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
                $_SESSION['id'] = $login->id;
                $_SESSION['name'] = $request['name'];
                $_SESSION['timeout'] = time();
                $_SESSION['user'] = $request;
                
                if ($request['rm']) {
                    setcookie('name', $request['name'], time() + (86400 * 30), "/");
                    setcookie('password', $request['password'], time() + (86400 * 30), "/");
                    setcookie('rm', $request['rm'], time() + (86400 * 30), "/");
                } else {
                    unset($_COOKIE['name']);
                    setcookie('name', null, -(time() + (86400 * 30)), '/'); 
                    unset($_COOKIE['password']); 
                    setcookie('password', null, -(time() + (86400 * 30)), '/'); 
                    unset($_COOKIE['rm']); 
                    setcookie('rm', 0, -(time() + (86400 * 30)), '/');
                }
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
            }else{
                echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register";</script>';
                die ();
            }
        }

        $this->show('register');
    }

}

?>