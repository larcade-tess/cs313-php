<?php
session_start();

if (!isset($_SESSION['items'])) {
	$_SESSION['items'] = array();
}

if (isset($_POST['item'])) {
	array_push($_SESSION['items'], $_POST['item']);
}
?>

