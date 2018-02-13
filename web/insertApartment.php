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
			<h3>Insert Apartments</h3>
		</div>
		<?php
		$address = $_POST['address'];
		$price = $_POST['price'];
		$details = $_POST['details'];
		$rented = $_POST['rented'];
		$comments = $_POST['comments'];
		?>
		<div>
			<?php
			require("connecttodb.php");
			$db = connect();
			try
			{
	// Add the Scripture
	// We do this by preparing the query with placeholder values
				$query = 'INSERT INTO apartment (rented, location, price, details, comments) VALUES(:rented, :address, :price, :details, :comments)';
				$statement = $db->prepare($query);
	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
				$statement->bindValue(':rented', $rented);
				$statement->bindValue(':location', $address);
				$statement->bindValue(':price', $price);
				$statement->bindValue(':details', $details);
				$statement->bindValue(':comments', $comments);
				$statement->execute();
	// get the new id
				$apartID = $db->lastInsertId("apartment_id");
			}
			catch (Exception $ex)
			{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
				echo "Error with DB. Details: $ex";
				die();
			}
// finally, redirect them to a new page to actually show the topics
			header("Location: allApartment.php");
die(); // we always include a die after redirects. In this case, there would be no
       // harm if the user got the rest of the page, because there is nothing else
       // but in general, there could be things after here that we don't want them
       // to see.
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