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
		$id = $_SESSION['item'];
		?>
		<div>
			<?php
			try
			{
				$query = 'SELECT username, passwordhash FROM login WHERE user_id =' . $id;
				$statement = $db->prepare($query);
				$statement->execute();
			}
			catch (Exception $ex)
			{
				die();
			}
			

			// Query for username and password
			if(password_verify($password, $hashed_password) && $username = $dbusername) {
	// redirect
				header("Location: welcome.php");
				die(); 
			} 

// Else, Redirect them back to the login page.
			else {
// redirect
				header("Location: login.php");
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