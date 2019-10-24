<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Đổi mật khẩu</title>
	<link rel="stylesheet" href="">
</head>
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
	.username , .password{
		border: 1px;
		border-style:  solid;
		border-color: #000000;
		border-radius: 2px;
		width: 200px;
		height: 35px;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
	.logform{
		margin: auto;
		width: 380px;
		height: 610px;
		background-color: #FFFFFF;
		border-radius: 5px;
	}
	.regis-link{
		display: block;
		text-decoration: none;
		color: #28C8FC;
		font-weight: bold;
		margin-left: 155px;
	}
	.regis-link:hover{
		text-decoration: underline;
	}
	.index{
		display: block;
		text-decoration: none;
		color: #28C8FC;
		font-weight: bold;
		margin-left: 155px;
	}
	.index:hover{
		text-decoration: underline;
	}
</style>
<body>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
   require('process-change-pass.php');
  }
  ?> 
	<div class="logform">
		<h1>Đổi mật khẩu</h1>
<form name="change-pass" method="post" action="process-change-pass.php">

<p>Email:</p><input class="username" type="text"  placeholder="" name="email" 
value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"> <br>
<p>Mật khẩu cũ:</p><input class="password" type="password" placeholder="" name="password" 
value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"><br>
<p>Mật khẩu mới:</p><input class="password" type="password" placeholder="" name="password1" 
value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>"><br>
<p>Xác nhận mật khẩu mới:</p><input class="password" type="password" placeholder="" name="password2" 
value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>"><br>

<input id="" class="submit" type="submit" name="submit" value="Đổi mật khẩu">
<a  class="index" href="index.php">Trang chủ</a>
</form>
</div>
</body>
</html>