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
					<a href='contacts.php'>Contacts</a>
				</li>
				<li>
					<a href='allApartments.php'>All Apartments</a>
				</li>
				<li>
					<a href='addApartment.php'>Add Apartments</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div>
			<?php
			if ($_SESSION['username'] isset)
			{
				$user = $_SESSION['username'];
				echo '<div> <h4> Welcome ' . $user . '</h4></div>';
			}
			else
			{
				header("Location: login.php");
				die(); 
			}
			?> 

		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>