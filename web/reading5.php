<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Slabo+27px" rel="stylesheet">
	<!-- <script src="connecttodb.php"></script> -->
</head>
<body>
	<main>
		<div>
			<h1>Apartments</h1>

		</div>

		<div>
			<?php
			$statement = $db->query('SELECT first_name FROM contact');
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
				{
					echo '<p>' . $row[first_name] . '</p>';
				}
				?>
			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
		<script src="connecttodb.js"></script>
	</body>
	</html>