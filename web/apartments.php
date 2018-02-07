<?php
	require_once 'connecttodb.php';
	$db = connect();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Slabo+27px" rel="stylesheet">
	<script src="connecttodb.js"></script>
</head>
<body>
	<main>
		<div>
			<h1>Apartments</h1>

		</div>

		<div>
			<?php
			$statement = $db->query('SELECT rented, location, price FROM apartments');
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
				{
					echo '<div class='. '"' . $row[rented] . '"' . '>' '</div>';
				}
				?>
			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>