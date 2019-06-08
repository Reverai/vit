<?php
include("bd.php");
$tableName = "SELECT * FROM comments"; 
$result = mysql_query($tableName); 
while($row = mysql_fetch_assoc($result)) 
{ 
echo "<td> {$row['user_comment']}</td><br> "; 
} 
?>