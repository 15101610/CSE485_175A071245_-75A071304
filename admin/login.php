<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
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
		height: 420px;
		background-color: #FFFFFF;
		border-radius: 5px;
	}
	.forget-link{
		display: block;
		text-decoration: none;
		color: #28C8FC;
		font-weight: bold;
		margin-left: 130px;		
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
	.forget-link:hover{
		text-decoration: underline;
	}
</style>
<body>
	<div class="logform">
		<h1>Đăng Nhập</h1>
<form name="login" method="post" action="checklogin.php">

<p>Tên đăng nhập:</p><input class="username" type="text"  placeholder="" name="username"> <br>
<p>Mật khẩu:</p><input class="password" type="password" placeholder="" name="password"><br>

<input id="" class="submit" type="submit" name="submit" value="Đăng nhập">
<a  class="regis-link" href="register.php">Đăng ký</a>
<a  class="forget-link" href="forget-pass.php">Quên mật khẩu?</a>
</form>
</div>
</body>
</html>