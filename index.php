<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$baseUrl = "http://localhost/class4.0/";
require_once "./Controllers/HomeController.php";
switch($url)
{
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    default:
        echo "404 not found";
}