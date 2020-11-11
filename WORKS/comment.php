<?php
require('connect.php');

$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO `Comment_td` (`Email`, `Comment`) VALUES ('$email', '$message')";
$query = mysqli_query($connect, $sql);

if ($query) {
	echo "Record Saved";
}
else{
	echo "An Error Occured";
}

?>