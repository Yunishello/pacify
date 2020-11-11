<?php
session_start();
require('connect.php');

$username = mysqli_real_escape_string($connect,$_POST['username']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
$sql = "SELECT * FROM Admin_td WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($connect, $sql) or die(mysql_error());

if (mysqli_num_rows($query) > 0) {
	while ($row = mysqli_fetch_array($query)) {
		session_start();
		$_SESSION['id'] = $row['id']; 
	
	header('location:admin.php');
}
} 
else {
	echo "An error occured";
}

?>