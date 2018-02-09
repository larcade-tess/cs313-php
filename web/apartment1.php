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
					<a href='apply.html'>Apply</a>
				</li>
				<li>
					<a href='contacts.html'>Contacts</a>
				</li>
				<li>
					<a href='#'>About Us</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div>
			<?php
			$dbinfo = $db->query('SELECT location FROM apartment WHERE apartment_id == 1');
			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{
					echo '<div class = "aptinfo">';
					echo '<div class="apartment"><a href="apartment' . $row[apartment_id] . '.php">' . $row[location] . '</a></div>';
					echo '<div class="location">' . $row[price] . ' Monthly </div> </div>';
				}
				?>
			</div>

			<div class = container>

				<div class="grid-img"><img src="img/15th street 1.jpg"></div>
				<div class="grid-img"><img src="img/15th street 2.jpg"></div>
				<div class="grid-img"><img src="img/15th street 3.jpg"></div>
				<div class="grid-img"><img src="img/15th street 4.jpg"></div>
				<div class="grid-img"><img src="img/15th street 5.jpg"></div>
				<div class="grid-img"><img src="img/15th street 6.jpg"></div>
				<div class="grid-img"><img src="img/15th street 7.jpg"></div>
				<div class="grid-img"><img src="img/15th street 8.jpg"></div>
				<div class="grid-img"><img src="img/15th street 9.jpg"></div>
				<div class="grid-img"><img src="img/15th street 10.jpg"></div>
				<div class="grid-img"><img src="img/15th street 11.jpg"></div>
				<div class="grid-img"><img src="img/15th street 12.jpg"></div>
				<div class="grid-img"><img src="img/15th street 13.jpg"></div>
				<div class="grid-img"><img src="img/15th street 14.jpg"></div>
				<div class="grid-img"><img src="img/15th street 15.jpg"></div>

			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>