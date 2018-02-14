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
		<h1>JAP Property Management</h1>
		<a class ='login' href='login.php'>Owner Login</a>
		<nav>
			<ul>
				<li>
					<a href='apartments.php'>Apartments</a>
				</li>
				<li>
					<a href='showing.php'>Schedule A Showing</a>
				</li>
				<li>
					<a href='apply.html'>Apply</a>
				</li>
				<li>
					<a href='contacts.php'>Contacts</a>
				</li>
				<li>
					<a href='#'>About Us</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<div>
			<h3>Login</h3>
		</div>
		<form id='login' action='validatelogin.php' method='post' accept-charset='UTF-8'>

			<input type='hidden' name='submitted' id='submitted' value='1'>

			<h3>UserName:</h3>

			<input type='text' name='username' id='username'  maxlength="50">

			<h3>Password:</h3>

			<input type='password' name='password' id='password' maxlength="50">

			<input type='submit' name='Submit' value='Submit'>

		</form>


	</main>
	<footer>
		&copy; Tess Larcade 2018
	</footer>
</body>
</html>