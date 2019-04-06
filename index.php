<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$baseUrl = "http://localhost/class4.0/";
require_once "./Controllers/HomeController.php";
require_once "./Controllers/UserController.php";
switch($url)
{
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "dang-ky-tai-khoan":
        $ctr = new HomeController();
        echo $ctr->registerPage();
        break;
    case "dang-nhap-tai-khoan":
        $ctr = new HomeController();
        echo $ctr->loginPage();
        break;
    case "register":
        $ctr = new UserController();
        echo $ctr->registerAccount();
        break;
    default:
        echo "404 not found";
}