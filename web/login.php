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
	<header>
		<h1>JAP Property Management</h1>
		<nav>
			<ul>
			</ul>
		</nav>
	</header>
	<main>
		<div>
			<form action="validate.php" method = "post">
				<h3>Username</h3> 
				<input type="username" id="username" name="user"><br>
				<h3>Password:</h3> 
				<input type="password" id="password" name="pass"><br>
				<button type = "submit">Login</button>
			</form>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>
