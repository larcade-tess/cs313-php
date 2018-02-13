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
			$info = "Thanks for contacting us " . $_POST['fName'] . ". ";
			$info .= "We will be in touch shortly. " ;
			$info .= "By phone: " . $_POST['phone'] ;
			$info .= " Or Email: " . $_POST['email'];
			$info_clean = htmlspecialchars($info);
			echo $info_clean;
			?>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>