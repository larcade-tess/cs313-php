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
				<h3>Thank You</h3>
			</div>
			<div>
				<?php 
				$info = "Thanks for contacting us " . $_POST['fName'] . ", ";
				$info .= "we will be in touch shortly by " ;
				$info .= "phone: " . $_POST['phone'] ;
				$info .= " and Email: " . $_POST['email'];
				$info_clean = htmlspecialchars($info);
				echo $info_clean;
				?>
			</div>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>