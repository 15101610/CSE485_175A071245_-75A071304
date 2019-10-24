<?php
    $conn = new mysqli('localhost','root','','tintuc') or die('Kết nối thất bại!'.mysqli_connect_error());
	mysqli_query($conn, 'SET NAMES UTF8');
?>