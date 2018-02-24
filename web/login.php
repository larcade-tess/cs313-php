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
		<?php include 'modules/logo.php';?>
		<nav>
			<?php 
			if (isset ($_SESSION['username']))
			{
				include 'modules/navlogin.php';
			}
			else
			{
				include 'modules/nav.php';
			}
			?> 
		</nav>
	</header>
	<main>
		<div class='indent'>
			<div>
				<h3>Login</h3>
			</div>
			<form action="validate.php" method = "post">
				<div class = 'section'>
					<div class = 'name'>
						<h4>Username:</h4> 
						<input type="username" id="username" name="user"><br>
						<h4>Password:</h4> 
						<input type="password" id="password" name="pass"><br>
					</div>
				</div>
				<button type = "submit" class = 'button'>Login</button>
			</form>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>
