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
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div id="wrapper">
<?php
include 'top.php';
?>
<div class="main">
        <div id="middle">
            <div id="banner">Tin mới nhất</div>
            <div id="content">
                <?php
                    $sql= "SELECT * FROM bantin ORDER BY idTin DESC LIMIT 5";
                    $result = mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($result)) {
                        $id=$row['idTin'];
                        $idn=$row['idNhom'];
                        $tieude=$row['tieude'];
                        $trichdan=$row['trichdan'];
                        echo "<a class='news-link' href='newsdetail.php?idn=".$row['idNhom']."&id=".$row['idTin']."'>".$row['tieude']."</a>";
                        echo "<br><p class='quote'>$tieude<p><br>";
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