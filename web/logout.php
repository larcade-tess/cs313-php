<?php
session_start();
require_once 'connecttodb.php';
$db = connect();
unset($_SESSION['username']);
header("Location: apartments.php");
die(); 
?>