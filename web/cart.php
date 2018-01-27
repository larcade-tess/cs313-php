<?php
session_start();
echo "session has been started";
$my_array = array("item");
for ($i=1; $i <= 9; $i++) {
    echo $my_array($i);
}
?>
