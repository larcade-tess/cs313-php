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
		<div class = 'indent'>
			<div>
				<h3>Thank You</h3>
			</div>
			<div>
				<?php 
				$info = "Thanks for contacting us " . $_POST['fName'] . ", ";
				$info .= "we will be in touch shortly by " ;
				$info .= "phone: " . $_POST['phone'] ;
				$info .= " and email: " . $_POST['email'];
				$info_clean = htmlspecialchars($info);
				echo $info_clean;
				?>
			</div>
		</div>

		<?php 
		$fName = $_POST['fName'];
		$lName = $_POST['lName'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$apartmentId =  $_POST['location'];

		try
		{
			$query = 'INSERT INTO contact (first_name, last_name, phone, email) VALUES(:fName, :lName, :phone, :email)';
			$statement = $db->prepare($query);
	// bind the values to the placeholders
			$statement->bindValue(':fName', $fName);
			$statement->bindValue(':lName', $lName);
			$statement->bindValue(':phone', $phone);
			$statement->bindValue(':email', $email);

			$statement->execute();
	//new id
			$contactId  = $db->lastInsertId();

				$account = "INSERT INTO account (account_contact_id, account_apartment_id) VALUES (:contactId, :apartmentId)";

				$insert = $db->prepare($account);
				$insert->bindValue(':contactId', $contactId);
				$insert->bindValue(':apartmentId', $apartmentId);

				$insert->execute();
			}

			catch (Exception $ex)
			{
				echo $ex;
				die();
			}
			?>
		</main>
		<footer>
			&copy; Tess Larcade 2018
		</footer>
	</body>
	</html>