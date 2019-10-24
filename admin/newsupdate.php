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
    <script type="text/javascript" src="ckedior/ckeditor.js"></script>
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
                    $sql="SELECT * FROM bantin WHERE idTin='$id'";
                    $result = mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($result);
                    $idn=$row['idNhom'];
            ?>
            <div id="banner">Sửa tin</div>
            <div id="content">
            <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="title">Tiêu đề:</h3>
                    <input type="text" name="tieude" size="80" value="<?php echo $row['tieude']?>">
                    <p class="quote">Trích dẫn:</p>
                    <input type="text" name="trichdan" size="80" value="<?php echo $row['trichdan']?>">
                    <p class='paragraph'>Nội dung:</p>
                    <textarea name="noidung" id="cknoidung" cols="30" rows="10" value="<?php echo $row['noidung']?>"></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("cknoidung");
                    </script>
                    <div class="form-group">
                        <p class="quote">Ảnh trích dẫn:</p>
                        <input type="file" name="anhtrichdan" id="InputFile" value="<?php echo $row['anhtrichdan']?>">
                        <p class="quote">Upload JPEG Files với dung lượng nhỏ hơn 100 KiloBytes</p>
                        <!-- Thong bao loi  -->
                        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
                        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
                    </div>
                    <input type="submit" name="insert" value="Chấp nhận">
                </form>
            </div>
            <?php 
                if(isset($_POST['update'])){
                    $tieude=$_POST['tieude'];
                    $trichdan=$_POST['trichdan'];
                    $noidung=$_POST['noidung'];
                    $anhtrichdan=$_POST['anhtrichdan'];
                    $sql="UPDATE bantin SET tieude='$tieude', trichdan='$trichdan', noidung='$noidung', anhtrichdan='$anhtrichdan'
                            WHERE idTin='$id";
                    header('location:index.php');
                }
            }
            ?>
        </div>
<?php
include 'right.php'
?>
</div>
</div>
</body>
</html>