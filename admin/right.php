<?php
  include 'data.php'
?>
<div id="right">
    <div class="newsgroup-menu"> <p>Chuyên mục</p></div>
        <div class="newsgroup"> 

<?php
			$sql = "select * from nhomtin order by idNhom ASC";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) {
				while($row=mysqli_fetch_assoc($result)) {
                    $id=$row['idNhom'];
					echo "<div class='group-field'><a class='group-links' href='news.php?id=".$row['idNhom']."'>".$row['tenNhom']." </a></div>" ."<br>";
				}
			}
			else echo "không có bản ghi nào!";
?>

        </div>
</div>