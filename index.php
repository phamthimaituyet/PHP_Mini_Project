<?php
require('Config/Database.php');
$db = new Database;
$db->connect();

echo $_GET['controller'];

die();

if (isset($_GET['controller'])) {
    require 'Route/web.php'; /*xử lý các request trong Route/web.php*/
} else {
    require 'Views/index.php'; /*require giao diện trang chủ*/
}


$db->closeDatabase();