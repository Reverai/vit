<?php
	include("bd.php");
	if(empty($_POST['username']) || empty($_POST['password1']) || empty($_POST['password2']))
	{
		exit("Sorry");
	}
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	if($password1 != $password2)
	{
		exit("Sorry-password");
	}

	$result = mysql_query("SELECT * FROM signup WHERE username='$username'", $db);
	$re = mysql_fetch_array($result);
	if($re['username'] == 0)
	{
		$res = mysql_query("INSERT INTO signup (username, password) VALUES ('$username', '$password1')");
		header("Location: /index.php");
		exit();
	}
	else
	{
		exit("sor");
	}

?>