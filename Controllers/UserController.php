<?php
require_once "./Models/User.php";
require_once "./Helpers/AuthTrait.php";
class UserController
{
    public function registerAccount()
    {
        extract($_POST);
        $model = new User();
        $columns = "";
        $values = "";
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = date("Y-m-d H-i-s");
        foreach($_POST as $key => $value)
        {
            if($key == "checkPassword")
            {
                continue;
            }else if($key == "role")
            {
                $value = "1";
            }else if($key == "profile_picture")
            {
                $value = "public/img/user/" .uniqid() ."-avatarDefault.jpg";
            }else if($key == "created_at")
            {
                $value = $date;
            }else if($key == "password")
            {
                $value = password_hash($value,PASSWORD_DEFAULT);
            }
            $columns .= " " .$key .",";
            $values .= " '" .$value ."',";
        }
        $columns = rtrim($columns, ',');
        $values = rtrim ($values, ",");
        $sqlQuery = "insert into " .$model->table
                    . " ($columns) values ($values)";
        User::rawQuery($sqlQuery);
        var_dump($sqlQuery);die;
        header("Location: ./dang-nhap-tai-khoan");
    }
}