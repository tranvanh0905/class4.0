<?php
class HomeController
{
    // hàm đặt link về trang chủ
    public function index()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/index.php';
    }
    public function registerPage()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/register.php';
    }
}