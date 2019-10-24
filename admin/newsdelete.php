<?php
    session_start();
    include 'data.php';  
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql = "DELETE FROM bantin WHERE idTin = $id";
        if (mysqli_query($conn, $sql)) {
         mysqli_close($conn);
         header('Location: index.php'); //Xóa thành công 
         exit;
       } else {
         echo "Error deleting record";
       }
    }
?>