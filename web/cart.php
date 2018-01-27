<?php
session_start();
echo "session has been started";

if (!isset($_SESSION['items'])) {
	$_SESSION['items'] = array();
}

if (isset($_POST['item'])) {
	array_push($_SESSION['items'], $_POST['item']);
}

$count = count($_SESSION['items']);
for ($i = 0; $i < $count; ++$i) {
	echo $_SESSION['items'][$i];
}

?>

