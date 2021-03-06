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
		<?php include 'modules/logo.php';?>
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
		<div class = 'indent'>
			<div>
				<h3>Apartments</h3>
			</div>

			<div class = container>
				<?php
				$dbinfo = $db->query('SELECT apartment_id, rented, location, price FROM apartment ORDER BY apartment_id');
				while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
					{
						if ($row[rented] == false)
						{
							echo '<div class = "containapart"><a href="apartment'. $row[apartment_id] . '.php">
							<div class="apartmentimg" id="apartment' . $row[apartment_id] . '">' . 
							'</div></a>';
							echo '<div class="info"> <div class="location"><h4>' . $row[location] . '</h4></div>';
							echo '<div class="price">' . $row[price] . ' Monthly </div></div></div>';
						} 
					}
					?>
				</div>
			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>