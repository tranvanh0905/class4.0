<?php
class HomeController
{
    // hàm đặt link về trang chủ
    public function index()
    {
        global $baseUrl;
        global $publicFolder;
        $faker = Faker\Factory::create();
        include_once './Views/Client/index.php';
    }
    public function registerPage()
    {
        global $baseUrl;
        global $publicFolder;
        // Khi đăng nhập, không thể trở lại trang đăng ký
        if(isset($_SESSION['auth']))
        {
            header("location:./");
        }else{
            include_once './Views/Client/register.php';
        }

    }
    public function loginPage()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/login.php';
    }
    public function about()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/about.php';
    }
    public function blog()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/blog.php';
    }
    public function blogpost()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/blogpost.php';
    }
    public function contact()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/contact.php';
    }
    public function courses()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/courses.php';
    }
    public function coursesdetail()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/coursesdetail.php';
    }
    public function error404()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/error404.php';
    }
    public function learning()
    {
        global $baseUrl;
        global $publicFolder;
        include_once './Views/Client/learning.php';
    }
}