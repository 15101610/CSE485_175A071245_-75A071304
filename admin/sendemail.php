<?php
$to = "tungnm72@wru.vn";
$subject = "Send Email from Localhost";
$txt = "Hello Teacher!";
$headers = "From: minhtung112@gmail.com" . "\r\n" ."CC: somebodyelse@example.com";
mail($to,$subject,$txt,$headers);
?>
