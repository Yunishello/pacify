<?php
require('connect.php');
$sentID = $_GET['id'];

$sql = "DELETE FROM `register_td` WHERE `id` = '$sentID'";
$query = mysqli_query($connect, $sql);

if ($query==true) {
	echo "Deleted Sucessfully";
}
else{
	echo "Unable to perform operations.";
}

?>