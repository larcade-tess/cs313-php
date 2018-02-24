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
		<div>
			<?php
			$dbinfo = $db->query('SELECT location, price FROM apartment WHERE apartment_id = 1');
			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{
					echo '<div class = "aptinfo">';
					echo '<div class="locationpg"><h2>' . $row[location] . '</h2></div>';
					echo '<div class="pricepg"><h3>' . $row[price] . ' Monthly </h3></div> </div>';
				}
				?>
			</div>
			<div class = "containslide">
				<div><button class="button-left" onclick="slide(-1)"> &#10094; </button></div>
				<div><button class="button-right" onclick="slide(+1)">&#10095;</button></div>

				<div class="slideshow">
					<img class ="aptimg" src="img/15th street 15.jpg">
					<img class ="aptimg" src="img/15th street 2.jpg">
					<img class ="aptimg" src="img/15th street 3.jpg">
					<img class ="aptimg" src="img/15th street 4.jpg">
					<img class ="aptimg" src="img/15th street 5.jpg">
					<img class ="aptimg" src="img/15th street 6.jpg">
					<img class ="aptimg" src="img/15th street 7.jpg">
					<img class ="aptimg" src="img/15th street 8.jpg">
					<img class ="aptimg" src="img/15th street 9.jpg">
					<img class ="aptimg" src="img/15th street 10.jpg">
					<img class ="aptimg" src="img/15th street 11.jpg">
					<img class ="aptimg" src="img/15th street 12.jpg">
					<img class ="aptimg" src="img/15th street 13.jpg">
					<img class ="aptimg" src="img/15th street 14.jpg">
					<img class ="aptimg" src="img/15th street 1.jpg">
				</div>

			</div>
		</main>
		<footer>
			<script src="js/slideshow.js"></script>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>