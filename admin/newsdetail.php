<?php
    include 'data.php'
?>
<?php
    session_start();
?>
<?php
if(!isset($_SESSION["user"])){
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css?v=<?php echo time(); ?>" media="all" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="wrapper">
<?php
include 'top.php';
?>
<div class="main">
        <div id="middle">
            <?php
                if(isset($_GET['id']) && isset($_GET['idn'])){
                    $id=$_GET['id'];
                    $idn=$_GET['idn'];
                    $sql="SELECT tennhom FROM nhomtin WHERE idnhom='$idn'";
                    $result = mysqli_query($conn,$sql);
                    $rown=mysqli_fetch_assoc($result);
            ?>
            <div id="banner"><?php echo $rown['tennhom']; ?></div>
            <div id="content">
                <?php
                    echo "<p align='right'>";
                    echo "<a href='newsadd.php?idn=$idn' style='text-decoration: none; font-weight:bold'>Thêm tin mới </a>";
                    echo "|<a href='newsupdate.php?id=$id' style='text-decoration: none; font-weight:bold'>Sửa  </a>";
                    echo "|<a href='newsdelete.php?id=$id' style='text-decoration: none; font-weight:bold'>Xóa </a>";
                    echo "</p>";
                    $sql="SELECT * FROM bantin WHERE idTin='$id'";
                    $result = mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                    echo "<h3 class='title'>";
                    echo $row['tieude'];
                    echo "</h3>";
                    echo "<p class='quote'>";
                    echo $row['trichdan'];
                    echo "</p>";
                    echo "<p class='paragraph' align=justify>";
                    echo $row['noidung'];
                    echo "</p>";
                    $img=$row['anhtrichdan'];
                    $src="data:image/jpg;base64,".base64_encode($row['anhtrichdan']);
                    if($row['anhtrichdan'] != NULL )
                    echo "<img src='".$src."' class='news-img'>";
                }
                ?> 
            </div>
        </div>
<?php
include 'right.php'
?>
</div>
</div>
</body>
</html>
