<?php
    $username=isset($_POST["username"]) ? $_POST["username"] : 0;
    $userpass =isset($_POST["password"]) ? $_POST["password"] : 0;
    $conn = new mysqli('localhost','root','','tintuc') or die('Kết nối thất bại!'.mysqli_connect_error());
	mysqli_query($conn, 'SET NAMES UTF8');
    $sql= "SELECT * FROM user WHERE userName = '$username'  ";
    if(mysqli_query($conn,$sql)){
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        if (password_verify($userpass, $row['userPass'])){
            session_start();
            $_SESSION["user"]=$username;
            header('location: index.php');
        }else{
            echo'Sai tên đăng nhập hoặc mật khẩu';
        }
    }else{
        echo'Lỗi hệ thống';
    }
?>