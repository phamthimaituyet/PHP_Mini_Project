<?php
include_once 'BaseController.php';

class HomeController extends BaseController
{
    public function  __construct()
    {
        if (!isset($_SESSION['name'])) {
            sleep(5);
            return header('Location: login');
        }
    }

    public function index()
    {
        $this->show('home');
    }
}