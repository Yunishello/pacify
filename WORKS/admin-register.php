<?php
require('connect.php');

$urname = $_POST['username'];
$pass = $_POST['password'];

$sql = "INSERT INTO `register_td` (`UserName`, `PassWord`,) VALUES ('$urname', '$pass')";
$query = mysqli_query($connect, $sql);

if ($query) {
	echo "Record Saved";
}
else{
	echo "An Error Occured";
}

?>