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
			<h3>Schedule a Showing</h3>
		</div>
		<div>
			<form action='thanks.php' method='post'>
				<h4>First Name</h4>
				<input type='Name' name='fName' required>
				<br>
				<h4>Last Name</h4>
				<input type='Name' name='lName' required>
				<br>
				<h4>Phone Number</h4>
				<input phone='Phone' name='phone' required>
				<br>
				<h4>Email Address</h4>
				<input email='Email' name='email' required>
				<br>
				<h4>Comments</h4>
				<textarea rows="4" cols="50" name='comments'></textarea>
				<br>
				<input type='submit'>
			</form>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>