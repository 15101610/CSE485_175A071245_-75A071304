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
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $sql="SELECT tennhom FROM nhomtin WHERE idnhom='$id'";
                    $result = mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
            ?>
            <div id="banner"> <?php echo $row['tennhom']; ?></div>
            <div id="content">
            <?php
            echo "<p align='right'>";
            echo "<a href='newsadd.php?idn=$id' style='text-decoration: none; font-weight:bold'>Thêm tin mới </a>";
            echo "</p>";
            $sql= "SELECT * FROM bantin WHERE idNhom='$id' ORDER BY idTin DESC LIMIT 10";
            $result = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['idTin'];
                        $idn=$row['idNhom'];
                        $tieude=$row['tieude'];
                        $trichdan=$row['trichdan'];
                        echo "<a class='news-link' href='newsdetail.php?idn=".$row['idNhom']."&id=".$row['idTin']."'>".$row['tieude']."</a>";
                        echo "<br><p class='quote'>$tieude<p><br>";
                    }
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