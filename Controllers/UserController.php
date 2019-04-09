<?php
require_once "./Models/User.php";
require_once "./Helpers/AuthTrait.php";
class UserController
{
    public function registerAccount()
    {
        extract($_POST);
        $model = new User();
        $columns = " ";
        $values = " ";
        $emailCheck;
        foreach($_POST as $key => $value)
        {
            if($key == "checkPassword")
            {
                continue;
            }else if($key == "role")
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