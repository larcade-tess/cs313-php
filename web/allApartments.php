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
			<?php
			$dbinfo = $db->query('SELECT apartment_id, rented, location, price, details, comments FROM apartment');
			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{

					echo '<div class = "contactinfo"> 
					<div class="fname">' . $row[apartment_id] . '</div>';
					echo '<div class="lname">' . $row[rented] . '</div>';
					echo '<div class="phone">' . $row[location] . '</div>';
					echo '<div class="phone">' . $row[price] . '</div>';
					echo '<div class="phone">' . $row[details] . '</div>';
					echo '<div class="email">' . $row[comments] . ' </div> </div>';
					
				}
				?> 
					</div>
				</main>
				<footer>
					&copy; Tess Larcade 2018
				</footer>
			</body>
			</html>