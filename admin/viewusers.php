<?php
    session_start();
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
<style>
    .title{
        text-align: center;
        color: ;
    }
    #users{
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    #users td, #users th {
        border: 1px solid black;
        padding: 8px;
    }
    #users tr:nth-child(even){
        background-color:;
    }
    #users th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color:  #1CA1D2;
        color: white;
    }
    .info{
        background-color: #ebedf5;
    }
</style>
<body>
    <div class="container">
    <div>
        <?php
            include 'top.php';
        ?>
    <div>
    <div class="title">  
        <h1>Danh sách người dùng</h1>
    </div>
    <div class="main-body">
        <?php
try {
    require('data.php');
    $query = "SELECT hoTen, userEmail FROM user";		
    $result = mysqli_query ($conn, $query); 
    if ($result) {
    echo '<table id="users">
    <tr><th>Họ Tên</th><th>Email</th></tr>';				
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo '<tr> <td class="info">' . $row['hoTen'] . '</td> <td class="info">' . $row['userEmail'] . '</td> </tr>'; 
    }
        echo '</table>';
        mysqli_free_result ($result);
    } else {
    echo '<p>Không thể lấy thông tin người dùng. </p> <br>';
    echo  mysqli_error($conn); 
    exit;
    } 
    mysqli_close($conn);
    }
    catch(Exception $e)             
       {
         print "Hệ thống hiện đang bận, vui lòng thử lại sau!";
       }
       catch(Error $e)
       {
          print "Hệ thống hiện đang bận, vui lòng thử lại sau!";
       }
        ?>
    </div>
    </div>
</body>
</html>