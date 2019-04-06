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
            $columns .= " " .$key .",";
            $values .= " " .$key .",";
        }
        $columns = rtrim($columns, ',');
        $values = rtrim ($values, ",");
    }
}