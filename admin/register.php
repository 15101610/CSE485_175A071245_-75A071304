<?php
  include 'data.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=5">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Đăng ký</title>
     <style>
	body{
		background-color: rgb(49, 52, 64)
	}
	p {
		height: 100%;
		font-family: ;
		color: gray;
		font-size: 20px;
		margin-left: 90px
	}
	h1{
		color:#1CA1D2;
		text-align: center
	}
	.submit{
		outline: none !important;
		font-family: ;
		border: 1px;
		border-radius: 15px;
		width: 150px;
		height: 40px;
		font-size: 20px;
		background: rgb(149, 228, 235);
		color: #fff;
		display: block;
		margin-left: auto;
		margin-right: auto;
		margin-top: 10px
	}
	.submit:hover{
		cursor: pointer;
		background-color: #28C8FC;
	}
	.username , .password,.email, .hoten{
		border: 1px;
		border-style:  solid;
		border-color: #000000;
		border-radius: 2px;
		width: 200px;
		height: 30px;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	.logform{
		margin: auto;
		width: 380px;
		height: 700px;
		background-color: #FFFFFF;
		border-radius: 5px;
	}
	.login-link{
		display: block;
		text-decoration: none;
		color: #28C8FC;
		font-weight: bold;
		margin-left: 155px;
	}
	.login-link:hover{
		text-decoration: underline;
	}
</style>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 require('process-register.php');
} 
?>
	<div class="logform">
		<h1>Đăng ký</h1>
<form name="login" onsubmit="return validateForm() ;" method="post">
<p>Họ Tên:</p><input class="hoten" type="text" name="hoten" 
value="<?php if (isset($_POST['hoten'])) echo $_POST['hoten']; ?>"> <br>
<p>Tên đăng nhập:</p><input class="username" type="text" name="username" 
value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"> <br>
<p>Mật khẩu:</p><input class="password" type="password" id="password1" name="password1"
value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>"><br>
<p>Xác nhận mật khẩu:</p><input type="password" class="password" id="password2" name="password2" 
value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>"><br>
<p>Email:</p><input class="email" type="text" name="email"
value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"> <br>

<input id="" class="submit" type="submit" name="submit" value="Đăng ký">
<a  class="login-link" href="login.php">Đăng nhập</a>
</form>
</div>
</body>
</html>