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

				$hashpassquery = "SELECT passwordhash FROM login WHERE username = '$username'";
				$statement = $db->prepare($hashpassquery);
				$statement->bindValue(':username', $username);
				$result = $statement->execute();

				if ($result)
				{
					$row = $statement->fetch();
					$hashpass = $row['password'];
		// now check to see if the hashed password matches
					if (password_verify($password, $hashpass))
					{
			// password was correct, put the user on the session, and redirect to home
						$_SESSION['username'] = $username;
						header("Location: home.php");
			die(); // we always include a die after redirects.
		}
		else {
// redirect
			echo($hashpass . $hashed_password . "error");
					//header("Location: login.php");
							//die(); 
		}
	}
	else {
// redirect
		echo($hashpass . $hashed_password . "error");
					//header("Location: login.php");
							//die(); 
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