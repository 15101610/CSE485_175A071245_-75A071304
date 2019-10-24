<?php
    $username=isset($_POST["username"]) ? $_POST["username"] : 0;
    $password =isset($_POST["password"]) ? $_POST["password"] : 0;
    $conn = new mysqli('localhost','root','','tintuc') or die('Kết nối thất bại!'.mysqli_connect_error());
	mysqli_query($conn, 'SET NAMES UTF8');
    $sql= "SELECT * FROM user WHERE userName = '$username'  ";
    if(mysqli_query($conn,$sql)){
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION["user"]=$username;
        echo "Gửi mật khẩu đến email";
        $password = $row['userPass'];
        $pass= password_verify($password, $row['userPass']);
        $to = $row['userEmail'];
        $subject = "Quên mật khẩu";
        $message = "Mật khẩu của bạn"  .$pass;
        $headers = "From : minhtung112@gmail.com";
        mail($to, $subject, $message, $headers);
    }

?>