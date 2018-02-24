<h1 id='logo'>J.A.P. Property Management</h1>
<?php 
if (isset ($_SESSION['username']))
{
	$user = $_SESSION['username'];
	echo '<div class = "login"> Welcome ' . $user . '</div>';
	echo '<a class = "logout" href = "logout.php">Logout</a>';
}
else
{
	echo '<a class = "login" href = "login.php">Login</a>';
}
?>
