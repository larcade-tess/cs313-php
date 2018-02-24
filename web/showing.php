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
		<div class = 'indent'>
			<div>
				<h3>Schedule A Showing</h3>
			</div>
			<div>
				<form action='thanks.php' method='post'>
					<div class='section'>
						<div class='name'>
							<h4>First Name</h4>
							<input type='Name' name='fName' required>
						</div>
						<div class='name'>
							<h4>Last Name</h4>
							<input type='Name' name='lName' required>
						</div>
					</div>
					<div class='section'>
						<div class='name'>
							<h4>Phone Number</h4>
							<input phone='Phone' name='phone' required>
						</div>
						<div class='name'>
							<h4>Email Address</h4>
							<input email='Email' name='email' required>
						</div>
					</div>
					<h4>Comments</h4>
					<textarea rows="4" cols="50" name='comments'></textarea>
					<br>
					<input class = 'button' type='submit'>
				</form>
			</div>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>