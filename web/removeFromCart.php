<?php
session_start();

if (!isset($_SESSION['items']))
{
	echo 'Nothing in cart';
}
else if (!isset($_POST['item']))
{
	echo 'No item provided to delete';
}
else
{
	$item = $_POST['item'];
	$items = $_SESSION['items'];
	$count = count($_SESSION['items']);
	$found = false;
	for ($i = 0; $i < $count; ++$i)
	{
		if ($items[$i] === $item)
		{
			// $key = array_search($_POST['item'], $_SESSION['items']);
			// if ($key !== false)
			// {
			// 	unset($_SESSION['items'][$key]);
			// 	$_SESSION["name"] = array_values($_SESSION["name"]);
			// 	$found = true;
			// }
			array_splice($_SESSION['items'], $i, 1);
			$found = true;

			break;
		}
	}
	if ($found)
	{
		// echo 'Delete successful';
		http_response_code(204);
	}
	else
	{
//		echo 'Failed to delete item ' . $item . '. Couldn\'t find item in cart';
		http_response_code(500);
	}
}

?>

