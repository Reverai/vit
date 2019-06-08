<?php

	session_start();
	include("bd.php");
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		exit("Sorry");
	}
	$username = $_POST['username'];
	$password = $_POST['password'];


	$result = mysql_query("SELECT * FROM signup WHERE username='$username'", $db);
	$re = mysql_fetch_array($result);
	if($re['username'] != null)
	{
		if($password == $re['password'])
		{
			$_SESSION['id'] = $re['user_id'];
			$_SESSION['username'] = $re['username'];
			header("Location: /todoo.php");
			exit;
		}
		else
			exit("sorry");
	}
	else
		exit("sor");

?>