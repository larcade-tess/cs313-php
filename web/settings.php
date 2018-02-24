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
		<?php
		if (isset ($_SESSION['username']))
		{
			echo'<div class="indent">
			<div>
			<h3>Settings</h3>
			</div>
			<form action="updatepass.php" method = "post">
			<div class = "section">
			<div class = "name">
			<h4>Current Password:</h4> 
			<input type="password" id="password" name="passold"><br>
			<h4>New Password:</h4> 
			<input type="password" id="password" name="passnew"><br>
			</div>
			</div>
			<button type = "submit" class = "button">Submit</button>
			</form>
			</div>';	
		}
		else
		{
			header("Location: login.php");
			die(); 
		}
		?> 

	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>
