<?php
class HomeController
{
    // hàm đặt link về trang chủ
    public function index()
    {
        global $baseUrl;
        include_once "./Views/homepage.php";
    }
}