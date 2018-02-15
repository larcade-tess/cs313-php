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
<body onload = 'validate();'>
	<header>
		<h1>JAP Property Management</h1>
		<nav>
			<ul>
				<li>
					<a href='apartments.php'>Apartments</a>
				</li>
				<li>
					<a href='showing.php'>Schedule A Showing</a>
				</li>
				<li>
					<a href='apply.html'>Apply</a>
				</li>
				<li>
					<a href='contacts.php'>Contacts</a>
				</li>
				<li>
					<a href='#'>About Us</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div>
			<form action="adduser.php" method = "post">
				<h3>Username</h3> 
				<input type="username" id="username" name="user" required><div class = 'error'></div><br>
				<h3>Password:</h3> 
				<input type="password" id="password" name="pass" required><div class = 'error'></div><br>
				<h3>Re-Enter Password:</h3> 
				<input type="password" id="password1" name="pass1" required><div class = 'error'></div><br>
				<button type = "submit">Sign Up</button>
			</form>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
	<script src="validate.js"></script>
</body>
</html>