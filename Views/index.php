<?php
require('Layouts/header.php');

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = '';
}

switch ($controller) {
    case 'test':
        echo "trang test";
        break;

    default:
        require('Pages/home.php');
        break;
}

require('Layouts/footer.php');