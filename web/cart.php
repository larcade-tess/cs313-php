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

//$item_array = array();
//for ($i = 0; $i < count(item_array); ++$i) {
//    echo $item_array[$i];
//}
?>

<!-- foreach($_SESSION['animals'] as $key=>$value)
    {
    // and print out the values
    echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
    }
 -->