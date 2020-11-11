<?php
$connect = mysqli_connect("localhost", "root", "", "pacifylabs");

if (!$connect) {
	echo "Error connect to Database" . mysqli_error();
}

?>