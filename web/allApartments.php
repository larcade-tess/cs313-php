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
			<h3>All Apartments</h3>
		</div>
		<div class = "apartments">
			<?php

			$dbinfo = $db->query('SELECT apartment_id, rented, location, price, details, comments, sqft, bed, bath FROM apartment');

			echo '<div class="column1"><h3>ID</h4></div> 
			<div class="column2"><h4>Rented</h4></div> 
			<div class="column3"><h4>Address</h4></div>
			<div class="column4"><h4>Price</h4></div>
			<div class="column5"><h4>Square Footage</h4></div>
			<div class="column6"><h4>Bedrooms</h4></div>
			<div class="column7"><h4>Bathrooms</h4></div>
			<div class="column8"><h4>Details</h4></div>
			<div class="column9"><h4>Comments</h4></div>';

			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{
					echo '<div class="column1">' . $row[apartment_id] . '</div>
					<div class="column2">' . $row[rented] . '</div>
					<div class="column3">' . $row[location] . '</div>
					<div class="column4">' . $row[price] .'</div>
					<div class="column5">' . $row[sqft] . '</div>
					<div class="column6">' . $row[bed] . '</div>
					<div class="column7">' . $row[bath] . '</div>
					<div class="column8">' . $row[details] . '</div>
					<div class="column9">' . $row[comments] . '</div>';
				}
				?> 
			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>