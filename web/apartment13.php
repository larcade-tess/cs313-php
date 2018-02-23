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
	</header>
	<main>
		<div>
			<?php
			$dbinfo = $db->query('SELECT location, price FROM apartment WHERE apartment_id = 13');
			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{
					echo '<div class = "aptinfo">';
					echo '<div class="locationpg"><h2>' . $row[location] . '</h2></div>';
					echo '<div class="pricepg"><h3>' . $row[price] . ' Monthly </h3></div> </div>';
				}
			?>
			</div>

			<div class = container>

				<div class="grid-img1"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img2"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img1"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img2"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img1"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img2"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img1"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img2"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img1"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img2"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img1"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img2"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img1"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img2"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>
				<div class="grid-img1"><img class ="aptimg" src="http://via.placeholder.com/350x350"></div>

			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>