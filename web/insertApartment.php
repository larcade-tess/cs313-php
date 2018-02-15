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
		<?php
		$address = $_POST['location'];
		$price = $_POST['price'];
		$details = $_POST['details'];
		$rented = $_POST['rented'];
		$comments = $_POST['comments'];
		$sqft = $_POST['sqft'];
		$bed = $_POST['bed'];
		$bath = $_POST['bath'];
		?>
		<div>
			<?php
			try
			{
				$query = 'INSERT INTO apartment (rented, location, price, details, comments, sqft, bed, bath) VALUES(:rented, :location, :price, :details, :comments, :sqft, :bed, :bath)';
				$statement = $db->prepare($query);
	// bind the values to the placeholders
				$statement->bindValue(':rented', $rented);
				$statement->bindValue(':location', $address);
				$statement->bindValue(':price', $price);
				$statement->bindValue(':details', $details);
				$statement->bindValue(':comments', $comments);
				$statement->bindValue(':sqft', $sqft);
				$statement->bindValue(':bed', $bed);
				$statement->bindValue(':bath', $bath);

				$statement->execute();
	//new id
				$apartID = $db->lastInsertId("apartment_id");
			}
			catch (Exception $ex)
			{
				die();
			}
// redirect
			header("Location: allApartments.php");
			die(); 
			?>
		</div>
		<div>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>