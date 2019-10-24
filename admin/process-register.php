<?php
    include 'data.php'
?>
<?php
    $errors = array();
    $hoten = trim($_POST['hoten']);
    if (empty($hoten)) {
        $errors[] = 'Bạn chưa điền họ tên';
    }   

    $username = trim($_POST['username']);
    if (empty($username)) {
        $errors[] = 'Bạn chưa điền tên đăng nhập';
    }
    $email = trim($_POST['email']);
    if (empty($email)) {
        $errors[] = 'Bạn chưa nhập email';
    }
    if(isset($_POST['password1'])){
        $password1 = $_POST['password1'];
    }
    if(isset($password1)){ 
        echo '';
    }
    $password2 = trim($_POST['password2']);
    if (!empty($password1)) {
        if ($password1 !== $password2) {
        $errors[] = 'Mật khẩu không khớp';
    } 
} else {
    $errors[] = 'Bạn chưa điền mật khẩu';
}
if (empty($errors)) {
try {
	    $hashed_passcode = password_hash($_POST['password1'], PASSWORD_DEFAULT);
		require ('data.php');         
		$query = "INSERT INTO user (hoTen,userName,userPass,userEmail) VALUES('$hoten','$username','$hashed_passcode','$email') ";
        if(mysqli_query($conn, $query))  
           {  
                header ("location: index.php"); 
           }  
            else {
		    $errorstring = "<p style='color:red'>";
			$errorstring .= "Lỗi hệ thống<br/>";
			echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
			echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $query . '</p>';
		    mysqli_close($conn);
		exit();
		}
    }
    catch (Exception $e)
{
  print "Đã có lỗi xảy ra. Vui lòng thử lại sau\n";
}
} 

?>