<?php 
session_start();
include '../model/login.php';
include '../model/config.php';
       if(isset($_POST['dangnhap'])){
        $user_name=$_POST['username'];
        $pass=$_POST['pass'];
       $result=check_user($user_name,$pass);
        if(is_array($result)){
            $_SESSION['user_name']=$result;
             extract($_SESSION['user_name']);
            
             if($role == 1){
                header('location: ../admin/index.php');
             }
             else{
                header('location: ../index.php');
             }
           
        }
        else{
            $thongbao="Email hoặc pass sai, Vui lòng nhập lại!";
        }
        
       }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/login.css">
    <title>ELEARNIFY</title>
</head>
<body>
    <div class="login-container">
        <div class="signin-signup">
            <form action="" class="sign-in-form">
                <img src="image/logo.png" alt="logo">
                <h2 class="title">Đăng Nhập</h2>
                <div class="social-media">
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                        <span>Tiếp tục với Google</span>
                    </a>
                </div>
                <div class="line"></div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mật khẩu">
                    <i class="fas fa-eye-slash"></i>
                </div>
                <div class="forgot-pass">
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <button type="submit" class="btn">Đăng Nhập</button>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Đăng Ký</h2>
                <div class="social-media">
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                        <span>Tiếp tục với Google</span>
                    </a>
                </div>
                <div class="line"></div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Tên của bạn">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Mật khẩu">
                </div>
                <input type="submit" value="Đăng Ký" class="btn">
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <span>Chào mừng bạn!</span>
                    <h2>Bạn đã có tài khoản?</h2>
                    <button class="btn" id="sign-in-btn">Đăng Nhập</button>
                </div>
                <img src="image/banner2.png" alt="banner" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <span>Chào mừng bạn!</span>
                    <h2>Bạn là thành viên mới?</h2>
                    <button class="btn" id="sign-up-btn">Đăng Ký Ngay</button>
                </div>
                <img src="image/banner1.png" alt="banner" class="image">
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html> 