<?php 
	include("bd.php");
	$result = mysql_query("SELECT * FROM todocom", $db);
	$r = array();
	while($res = mysql_fetch_array($result)){
		array_push($r, $res['id'], $res['Message']);
	}
	echo json_encode($r);

?>