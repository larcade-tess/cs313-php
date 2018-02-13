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
			<h3>Add Apartment</h3>
		</div>
		<div>
			<?php
			$dbinfo = $db->query('SELECT apartment_id, rented, location, price, details, comments FROM apartment');
			while ($row = $dbinfo->fetch(PDO::FETCH_ASSOC))
				{

					echo '<div class = "contactinfo"> 
					<div class="fname">' . $row[apartment_id] . '</div>';
					echo '<div class="lname">' . $row[rented] . '</div>';
					echo '<div class="phone">' . $row[location] . '</div>';
					echo '<div class="phone">' . $row[price] . '</div>';
					echo '<div class="phone">' . $row[details] . '</div>';
					echo '<div class="email">' . $row[comments] . ' </div> </div>';
					
				}
				?> 
				<?php
				try
				{

	// For this example, we are going to make a call to the DB to get the scriptures
	// and then for each one, make a separate call to get its topics.
	// This could be done with a single query (and then more processing of the resultset
	// afterward) as follows:
	//	$statement = $db->prepare('SELECT book, chapter, verse, content, t.name FROM scripture s'
	//	. ' INNER JOIN scripture_topic st ON s.id = st.scriptureId'
	//	. ' INNER JOIN topic t ON st.topicId = t.id');
	// prepare the statement
					$statement = $db->prepare('SELECT id, book, chapter, verse, content FROM scripture');
					$statement->execute();
	// Go through each result
					while ($row = $statement->fetch(PDO::FETCH_ASSOC))
						{
							echo '<p>';
							echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
							echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
							echo '<br />';
							echo 'Topics: ';
		// get the topics now for this scripture
							$stmtTopics = $db->prepare('SELECT name FROM topic t'
								. ' INNER JOIN scripture_topic st ON st.topicId = t.id'
								. ' WHERE st.scriptureId = :scriptureId');
							$stmtTopics->bindValue(':scriptureId', $row['id']);
							$stmtTopics->execute();
		// Go through each topic in the result
							while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
								{
									echo $topicRow['name'] . ' ';
								}
								echo '</p>';
							}
						}
						catch (PDOException $ex)
						{
							echo "Error with DB. Details: $ex";
							die();
						}
						?>
					</div>
				</main>
				<footer>
					&copy; Tess Larcade 2018
				</footer>
			</body>
			</html>