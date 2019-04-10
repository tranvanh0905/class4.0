<?php
require_once "./Models/User.php";
require_once "./Helpers/AuthTrait.php";
class UserController
{
    //Kiểm tra sự tồn tại của email so với database
    public function checkEmailExists()
    {
        extract($_POST);
        $emailInput = User::where("email","=",$email)->get();
        if($emailInput != false)
        {
            echo(json_encode(false));
        }else{
            echo(json_encode(true));
        }
    }
    // Đăng ký tài khoản
    public function registerAccount()
    {
        extract($_POST);
        $model = new User();
        $columns = "";
        $values = "";
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
            }else if($key == "status")
            {
                $value = "1";
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