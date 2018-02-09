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
			<h3>Thank You</h3>
		</div>
		<div>
			<?php 
			$info = $_POST['fname'];
			$info .= "\r\n" . $_POST['lName']; 
			$info .= "\r\n" . $_POST['phone'];
			$info .= "\r\n" . $_POST['email'];
			$info .= "\r\n" . $_POST['comments']; 
			$info_clean = htmlspecialchars($info);
			echo $info_clean;
			?>
		</div>

		<div class = container>
			<p>Thanks for contacting us <?php $_POST['fname']?>, we will respond shortly. <br>
				By phone: <?php $_POST['phone']?> <br>
				Or Email: <?php $_POST['email']?></p>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>