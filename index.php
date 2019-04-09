<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$baseUrl = "http://localhost/class4.0/";
$publicFolder = "./Public";
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
    case "login":
        $ctr = new UserController();
        echo $ctr->loginAccount();
        break;
    case "about":
        $ctr = new HomeController();
        echo $ctr->about();
        break;
    case "blog":
        $ctr = new HomeController();
        echo $ctr->blog();
        break;
    case "blogpost":
        $ctr = new HomeController();
        echo $ctr->blogpost();
        break;
    case "contact":
        $ctr = new HomeController();
        echo $ctr->contact();
        break;
    case "courses":
        $ctr = new HomeController();
        echo $ctr->courses();
        break;
    case "coursesdetail":
        $ctr = new HomeController();
        echo $ctr->coursesdetail();
        break;
    case "error404":
        $ctr = new HomeController();
        echo $ctr->error404();
        break;
    default:
        echo "404 not found";
}