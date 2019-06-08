<?php 
include("bd.php");
$id = $_POST['id'];
mysql_query("DELETE FROM todocom WHERE id = '$id'");
 ?>
