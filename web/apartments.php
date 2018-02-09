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
			<h3>Apartments</h3>
		</div>

		<div class = container>
			<?php
			$dbinfo = $db->query('SELECT apartment_id, rented, location, price FROM apartment');
			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{
					if ($row[rented] == false)
					{
						echo '<a href="apartment'. $row[apartment_id] . '.php"><div class = "aptinfo"> <div class="apartmentimg" id="apartment' . $row[apartment_id] . '">' . '</div>';
						echo '<div class="apartment">' . $row[location] . '</div></a>';
						echo '<div class="location">' . $row[price] . ' Monthly </div> </div>';
					} 
				}
				?>
			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>