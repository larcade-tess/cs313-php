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
		<h1 id='logo'>JAP Property Management</h1>
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

		}
		else
		{
			header("Location: login.php");
			die(); 
		}
		?> 
		<div class = 'indent'>
			<div>
				<h3>Add Apartment</h3>
			</div>
			<div>
				<form action='insertApartment.php' method='post'>
					<div class = 'section'>
						<div class = 'name'>
							<h4>Address</h4>
							<input type='Address' name='location' required>
						</div>
						<div class = 'name'>
							<h4>Price</h4>
							<input type='Text' name='price' required>
						</div>
					</div>
					<div class = 'section'>
						<div class = 'name'>
							<h4>Bed</h4>
							<select name='bed' required>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
						<div class = 'name'>
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
						</div>
					</div>
					<div class = 'section'>
						<div class = 'name'>
							<h4>Square Footage</h4>
							<input type='Text' name='sqft' required>
						</div>
						<div class = 'name'>
							<h4>Apartment is rented</h4>
							<select name='rented'>
								<option value="true">Rented</option>
								<option value="false">Not Rented</option>
							</select>
						</div>
					</div>
					<div class = 'section'>
						<div class = 'name'>
							<h4>Details</h4>
							<textarea rows="4" cols="50" name="details" required></textarea>
							<br>
							<h4>Comments</h4>
							<textarea rows="4" cols="50" name='comments'></textarea>
						</div>
					</div>
					<input type='submit' class = 'button'>
				</form>
			</div>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>