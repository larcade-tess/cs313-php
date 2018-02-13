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
			<h3>Add Apartment</h3>
		</div>
		<div>
			<form action='insertApartment.php' method='post'>
				<h4>Address</h4>
				<input type='Address' name='location' required>
				<br>
				<h4>Price</h4>
				<input type='Text' name='price' required>
				<br>
				<h4>Bed</h4>
				<select name='bed' required>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
				<br>
				<h4>Bath</h4>
				<select name='bath' required>
					<option value="1">1</option>
					<option value="1.5">1.5</option>
					<option value="1.75">1.75</option>
					<option value="2">2</option>
					<option value="2.5">2.5</option>
					<option value="2.75">2.75</option>
					<option value="3">3</option>
					<option value="3.5">3.5</option>
					<option value="3.75">3.75</option>
					<option value="4">4</option>
				</select>
				<br>
				<h4>Square Footage</h4>
				<input type='Text' name='sqft' required>
				<br>
				<h4>Apartment is rented</h4>
				<select name='rented'>
					<option value="true">Rented</option>
					<option value="false">Not Rented</option>
				</select>
				<br>
				<h4>Details</h4>
				<textarea rows="4" cols="50" name="details" required></textarea>
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