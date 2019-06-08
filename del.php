<?php 
include("bd.php");
$comment = $_POST['addMessage'];
mysql_query("INSERT INTO todocom (Message) VALUES ('$comment')");
echo $comment;
 ?>
