<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>Main page</title>
</head>
<body>
	<style > 
body 
{ 
background: url(https://i.pinimg.com/originals/b6/45/21/b645213afd23b2954a00e11afe35515d.jpg) no-repeat; 
background-size: 100%; 
} 
</style> 
<h1>
	<div align="center">Main page</div>
	</h1>
	<form method="POST" action="check_user.php">
		<div id="l1">
		<h4 align="center">
		<p>
			<label >Your login</label><br>
			<div align="center">
			<input type="text" name="username" class="form-control" id="l3">
		</div>
		</p>
		<p>
			<label>Your password</label><br>
			<div align="center">
			<input type="password" name="password" class="form-control" id="l2">
			</div>
		</p>
	</h4>
	<h4 align = "center">
		<p>
			<button id="button" class="btn btn-outline-info">Enter to website</button><br>
			<a href="/signup.php">Registration</a><br>
		</p>
	</h4>
</div>
		</form>
		<style type="text/css">
   #l1 {
    padding: 100px;
   }
   #l2 {
   	width: 300px;
   }
   #l3 {
   	width: 300px;
   }
  </style>
		<?php
		if(!empty($_SESSION['username']))
			echo "<h3 align = 'center'<br>HELLO ".$_SESSION['username']." <form method = 'POST' action = 'exit.php'><h2 align = 'center'><button>Exit</h2></form>";
		?>
</body>
</html>