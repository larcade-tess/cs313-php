<?php
requore_once 'connecttodb.php'
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Apartments</title>
</head>
<body>
	<div>
		<h1>Apartments</h1>
	</div>

	<div>
		<?php
		$statement = $db->query('SELECT first_name FROM contact')
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
				echo '<p>' . $row[first_name]
			}
		?>
	</div>

</body>
</html>