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
// define variables and set to empty values
		$usererr = $passerr = $pass1err = "";
		$user = $pass = $pass1 = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["user"])) {
				$usererr = "User is required";
			} 
			else {
				$user = test_input($_POST["user"]);
			}

			if (empty($_POST["pass"])) {
				$passerr = "Password is required";
			} 
			else if (strlen($_POST["pass"]) < 7 ) {
				$passerr = "Password must be 7 characters";
			}
			else if (!preg_match('~[0-9]~',($_POST["pass"])) ) {
				$passerr = "Password must contain a digit";
			}
			else {
				$pass = test_input($_POST["pass"]);
			}
			if (empty($_POST["pass1"])){
				$pass1err = "Password is required";
			} 
			else {
				if (($_POST["pass"]) != ($_POST["pass1"])) {
					$pass1err = "* Passwords must match";
					$passerr = "*";
				}
				else {
					$pass1 = test_input($_POST["pass1"]);
				}
			}
		}

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		?>

		<div>
			<form action="adduser.php" method = "post">
				<h3>Username</h3> 
				<input type="username" id="username" name="user"><div class = 'error'><?php echo $usererr;?></div><br>
				<h3>Password:</h3> 
				<input type="password" id="password" name="pass"><div class = 'error'><?php echo $passerr;?></div><br>
				<h3>Re-Enter Password:</h3> 
				<input type="password" id="password1" name="pass1"><div class = 'error'><?php echo $pass1err;?></div><br>
				<button type = "submit">Sign Up</button>
			</form>
		</div>

	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>