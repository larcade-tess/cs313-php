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

			<div class = container>

				<div class="grid-img1"><img class ="aptimg" src="img/15th street 15.jpg"></div>
				<div class="grid-img2"><img class ="aptimg" src="img/15th street 2.jpg"></div>
				<div class="grid-img1"><img class ="aptimg" src="img/15th street 3.jpg"></div>
				<div class="grid-img2"><img class ="aptimg" src="img/15th street 4.jpg"></div>
				<div class="grid-img1"><img class ="aptimg" src="img/15th street 5.jpg"></div>
				<div class="grid-img2"><img class ="aptimg" src="img/15th street 6.jpg"></div>
				<div class="grid-img1"><img class ="aptimg" src="img/15th street 7.jpg"></div>
				<div class="grid-img2"><img class ="aptimg" src="img/15th street 8.jpg"></div>
				<div class="grid-img1"><img class ="aptimg" src="img/15th street 9.jpg"></div>
				<div class="grid-img2"><img class ="aptimg" src="img/15th street 10.jpg"></div>
				<div class="grid-img1"><img class ="aptimg" src="img/15th street 11.jpg"></div>
				<div class="grid-img2"><img class ="aptimg" src="img/15th street 12.jpg"></div>
				<div class="grid-img1"><img class ="aptimg" src="img/15th street 13.jpg"></div>
				<div class="grid-img2"><img class ="aptimg" src="img/15th street 14.jpg"></div>
				<div class="grid-img1"><img class ="aptimg" src="img/15th street 1.jpg"></div>

			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>