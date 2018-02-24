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
				<div class="column3"><h4>Email</h4></div>';

				$dbinfo = $db->query('SELECT first_name, last_name, phone, email FROM contact');
				while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
					{
						echo '<div class="column1">' . $row[first_name] . " " . $row[last_name] . '</div>
						<div class="column2">' . $row[phone] . '</div>
						<div class="column3">' . $row[email] . '</div>';
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