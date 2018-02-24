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
		<?php
		$username = $_SESSION['username'];
		$oldpassword = $_POST['passold'];
		$newpassword = $_POST['passnew'];
		$hashednewpass = password_hash($newpassword, PASSWORD_DEFAULT);
		try
		{

			$hashpassquery = $db->query("SELECT passwordhash FROM login WHERE username = '$username'");
			$result = $hashpassquery->execute();

			if ($result)
			{
				$row = $hashpassquery->fetch();
				$hashpass = $row['passwordhash'];

				if (password_verify($oldpassword, $hashpass))
				{
					$update = $db->query("UPDATE login SET passwordhash = '$hashednewpass' WHERE username = '$username'");
					$update->execute();

					echo "<h4 class = 'indent'>Password update successful.</h4>";
				}
				else {

					echo "<h4 class = 'indent'>Unable to update password, please try again.</h4>";
				}
			}
			else {

				echo "<h4 class = 'indent'>Something went wrong, please try again.</h4>";
			}
		}

		catch (Exception $ex)
		{
			echo($ex);
			die();
		}
		?>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>
