<?php
session_start();
require_once 'connecttodb.php';
$db = connect();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/jap.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Slabo+27px" rel="stylesheet">
</head>
<body>
	<main>
		<div>
			<form action="validate.php" method = "post">
				<h3>Username</h3> 
				<input type="username" id="username" name="username"><br>
				<h3>Password:</h3> 
				<input type="text" id="password" name="password"><br>
				<button type = "submit">Login</button>
			</form>
		</div>
		<div>
		</div>
		<div>


		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>
