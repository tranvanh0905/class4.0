<?php
require_once "./Models/User.php";
require_once "./Helpers/AuthTrait.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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
        return $this;
    }
    // Đăng nhập tài khoản
    public function loginAccount()
    {
        extract($_POST);
        $emailLogin = User::where("email","=",$email)->first();
        if($emailLogin != null && password_verify($password, $emailLogin->password))
        {
            $_SESSION['auth']=
            [
                "id" => $emailLogin->id,
                "email" => $emailLogin->email,
                "profile_picture" => $emailLogin->profile_picture,
                "role" => $emailLogin->role,
                "status" => $emailLogin->status
            ];
            header("location:./");die;
        }
    }
    // Gửi email thông báo
    public function sendEmail()
    {
        $mail = new PHPMailer(true);                              
        try {
            $mail->CharSet = 'UTF-8';
            $mail->SMTPDebug = 2;                                 
            $mail->isSMTP();                                      
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;                              
            $mail->Username = 'class40poly@gmail.com';                 
            $mail->Password = 'Class40Poly123';                           
            $mail->SMTPSecure = 'tls';                           
            $mail->Port = 587;                                    
            $recceive = $_POST['recceive'];
            $recceiveEmail = explode(",", $recceive);
            $mail->setFrom('class40poly@gmail.com', 'F-LMS');
            $mail->addAddress($_POST['email']);   
            $mail->addReplyTo($_POST['email'], $_POST['first_name']);
            $mail->isHTML(true);                             
            $mail->Subject = $subject;
            $mail->Body    = $content;
            $mail->send();
            header("location:./dang-nhap-tai-khoan");
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}