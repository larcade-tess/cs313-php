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
	<main>
		<div>
			<h1>Apartments</h1>

		</div>

		<div>
			<?php
			$dbinfo = $db->query('SELECT apartment_id, rented, location, price FROM apartment');
			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{
					if ($row[rented] == false)
					{
						echo '<div class="apartmentimg" id="apartment' . $row[apartment_id] . '">' . '</div>';
						echo '<div class="apartment">' . $row[location] . '</div>';
						echo '<div class="location">' . $row[price] . ' Monthly </div>';
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