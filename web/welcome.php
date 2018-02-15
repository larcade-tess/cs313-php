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
					<a href='contacts.php'>Contacts</a>
				</li>
				<li>
					<a href='allApartments.php'>All Apartments</a>
				</li>
				<li>
					<a href='addApartment.php'>Add Apartments</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div>
			<h3>All Apartments</h3>
		</div>
		<div>
			<?php
			$id = $_SESSION['item'];
			$dbinfo = $db->query('SELECT username FROM login WHERE user_id = "$id"');

			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{
					echo '<div> <h4> Welcome ' . $row[username] . '</h4></div>';
				}
				?> 

			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>