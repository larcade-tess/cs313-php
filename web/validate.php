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
		<div>
			<?php
			$username = $_POST['user'];
			$password = $_POST['pass'];
			
			try
			{

				$hashpassquery = 'SELECT passwordhash FROM login WHERE username = :username';
				$statement = $db->prepare($hashpassquery);
				$statement->bindValue(':username', $username);
				$result = $statement->execute();

				if ($result)
				{
					$row = $statement->fetch();
					$hashpass = $row['passwordhash'];

					if (password_verify($password, $hashpass))
					{
						$_SESSION['username'] = $username;
						// redirect
						header("Location: welcome.php");
						die();
					}
					else {
			// redirect
						header("Location: login.php");
						die(); 
					}
				}
				else {
			// redirect
					header("Location: login.php");
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
			<a href = 'signup.php'>Sign Up</a>
		</div>
	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>