
<?php     
    require ('data.php'); 
	$errors = array(); 
	$email = trim($_POST['email']);
	if (empty($email)) {
		$errors[] = 'Bạn chưa nhập Email';
	}
	$password = trim($_POST['password']);
	if (empty($password)) {
		$errors[] = 'Bạn chưa nhập mật khẩu hiện tại';
		} 
    $new_password = trim($_POST['password1']);
	$verify_password = trim($_POST['password2']);
	if (!empty($new_password)) {
        if (($new_password != $verify_password) ||
			( $password == $new_password ))
		{
            $errors[] = 'Mật khẩu mới không khớp hoặc';
			$errors[] = 'mật khẩu mới trùng với mật khẩu cũ';
		}
	} else {
			$errors[] = 'Bạn chưa nhập mật khẩu mới';
    }
	if (empty($errors)) {              
try {
    $query = "SELECT userID, userPass FROM user WHERE ( userEmail=? )";
	$q = mysqli_stmt_init($conn);                                 
    mysqli_stmt_prepare($q, $query);
    mysqli_stmt_bind_param($q, 's', $email);
    mysqli_stmt_execute($q);

	$result = mysqli_stmt_get_result($q);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ((mysqli_num_rows($result) == 1)
          && (password_verify($password, $row['userPass'])))
		{
	    $hashed_passcode = password_hash($new_password, PASSWORD_DEFAULT);                                                          
       $query = "UPDATE user SET userPass=? WHERE userEmail=?";
	   $q = mysqli_stmt_init($conn);                                 
       mysqli_stmt_prepare($q, $query);
       mysqli_stmt_bind_param($q, 'ss', $hashed_passcode, $email);
       mysqli_stmt_execute($q);
       if (mysqli_stmt_affected_rows($q) == 1) {
        echo "<script>
        alert('Đổi mật khẩu thành công!');
        window.location.href='index.php';
        </script>"; 
		  exit();   
		} else {
			$errorstring = "Lỗi hệ thống!";
			echo "<p class='text-center' style='color:red'>$errorstring</p>";	
		    exit();
		 }
    } else { 
		$errorstring = 'Lỗi! <br /> ';
        $errorstring .= 'Email hoặc mật khẩu không đúng';
		echo "<p class='text-center col-sm-2' style='color:red'>$errorstring</p>";
} }	
   catch(Exception $e)              
   {
     print "Hệ thống bận";
   }
   catch(Error $e)
   {
      print "Hệ thống bận. Vui lòng thử lại!";
   }
	} else { 
		$errorstring = "Lỗi:<br>";
		foreach ($errors as $msg) {
			$errorstring .= " - $msg<br>\n";
		}
		$errorstring .= "Vui lòng thử lại!<br>";
		echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
		}
?>







