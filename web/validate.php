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
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		?>
		<div>
			<?php
			try
			{
				$hashpass = "SELECT passwordhash FROM login WHERE username = '$username'";
				$statement = $db->prepare($hashpass);
				$statement->execute();


			// Query for username and password
				if(password_verify($hashed_password, $hashpass)) {
	// redirect
					//echo($hashpass, $hashed_password, "ok")
					header("Location: welcome.php");
					die(); 
				} 

// Else, Redirect them back to the login page.
				else {
// redirect
					//echo($hashpass, $hashed_password, "error")
					header("Location: welcome.php");
					die(); 
				}

			}
			catch (Exception $ex)
			{
				echo($ex);
				die();
			}

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