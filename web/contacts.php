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
				<h3>Contacts</h3>
			</div>
			<?php
			if (isset ($_SESSION['username']))
			{
				echo '<div class = "apartments">
				<div class="column1"><h4>Name</h4></div> 
				<div class="column2"><h4>Phone</h4></div> 
				<div class="column3"><h4>Email</h4></div>
				<div class="column4"><h4>Apartment ID</h4></div>';

				$dbinfo = $db->query('SELECT contact.first_name, contact.last_name, contact.phone, contact.email, account_apartment_id
					FROM contact
					FULL OUTER JOIN account ON contact_id = account_contact_id;');
				while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
					{
						echo '<div class="column1">' . $row[first_name] . " " . $row[last_name] . '</div>
						<div class="column2">' . $row[phone] . '</div>
						<div class="column3">' . $row[email] . '</div>';
						echo '<div class="column4">' . $row[account_apartment_id] . '</div>';
					}
					echo '</div>';		
				}
				else
				{
					header("Location: login.php");
					die(); 
				}
				?> 
			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>