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

					echo '<div class = "apartments"> 
					<div class="column"> <h3>ID</h3>' . $row[apartment_id] . '</div>';
					echo '<div class="column"><h3>Rented</h3>' . $row[rented] . '</div>';
					echo '<div class="column"><h3>Address</h3>' . $row[location] . '</div>';
					echo '<div class="column"><h3>Price</h3>' . $row[price] . '</div>';
					echo '<div class="column"><h3>Details</h3>' . $row[details] . '</div>';
					echo '<div class="column"><h3>Comments</h3>' . $row[comments] . ' </div> </div>';
					
				}
				?> 
					</div>
				</main>
				<footer>
					&copy; Tess Larcade 2018
				</footer>
			</body>
			</html>