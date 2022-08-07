<?php
include_once 'BaseController.php';
include_once '../Models/UserModel.php';
 
class UserController extends BaseController 
{ 
    public function login() 
    {   
        $user = new UserModel();

        if ($this->isPost()) {
            $request = $this->request();
            $login = $user->checkUserLogin($request);

            if($login){
                $_SESSION['id'] = $login->id;
                $_SESSION['name'] = $request['name'];
                $_SESSION['timeout'] = time();

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
                header('Location: home');
            }
        } else {
            if($user->checkIsLoggedIn()) {
                header('Location: home');
            }
        }

        $this->show('login');
    }

    public function register()
    {
        $user = new UserModel();

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

    public function logout(){
        unset($_SESSION['name']); // xóa session user đã tạo khi đăng nhập
        unset($_SESSION['id']);
		header('Location: login'); // chuyển hướng về login
    }

}

?>