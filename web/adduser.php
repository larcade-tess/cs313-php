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
				$query = 'INSERT INTO login (username, passwordhash ) VALUES(:username, :hashed_password)';
				$statement = $db->prepare($query);
	// bind the values to the placeholders
				$statement->bindValue(':username', $username);
				$statement->bindValue(':hashed_password', $hashed_password);

				$statement->execute();
	//new id
				$userID = $db->lastInsertId("user_id");
				addItem($userID);
			}
			catch (Exception $ex)
			{
				echo($ex);
				die();
			}
// redirect
			header("Location: login.php");
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