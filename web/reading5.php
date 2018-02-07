<?php

$dbUrl = getenv('DATABASE_URL');

if (empty($dbUrl)) {
 // example localhost configuration URL with postgres username and a database called cs313db
	$dbUrl = "postgres://postgres:password@127.0.0.1:5432/Scriptures";
}

$dbopts = parse_url($dbUrl);


print "<p>$dbUrl</p>\n\n";

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName;</p>\n\n";

try {
	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $ex) {
	print "<p>error: $ex->getMessage() </p>\n\n";
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Apartments</title>
</head>
<body>
	<div>

		<h1>Apartments</h1>

		<?php

		foreach ($db->query('SELECT now()') as $row)
		{
			print "<p>$row[0]</p>\n\n";
		}

		$statement = $db->prepare("SELECT apartment, contact FROM JAPdb");
		$statement->execute();
// Go through each result
		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
			{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
				echo '<p>';
				echo $row['apartment'] . ' ' . $row['contact'] 
				echo '</p>';
			}
			?>
		</div>

	</body>
	</html>