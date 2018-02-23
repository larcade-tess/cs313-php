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
		<h1 id='logo'>JAP Property Management</h1>
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
		<div>
			<h3>Contacts</h3>
		</div>
		<?php
		if (isset ($_SESSION['username']))
		{
			?>
			<div class = container>
				<?php
				$dbinfo = $db->query('SELECT first_name, last_name, phone, email FROM contact');
				while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
					{
						if ($row[rented] == false)
						{
							echo '<div class = "contactinfo"> 
							<div class="fname">' . $row[first_name] . '</div>';
							echo '<div class="lname">' . $row[last_name] . '</div>';
							echo '<div class="phone">' . $row[phone] . '</div>';
							echo '<div class="email">' . $row[email] . ' </div> </div>';
						} 
					}
					?> 
					<?php		
				}
				else
				{
					header("Location: login.php");
					die(); 
				}
				?> 

<!-- 
				$query = 'INSERT INTO scripture(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
				$statement = $db->prepare($query); -->
			</div>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>