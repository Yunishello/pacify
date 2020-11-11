<?php
require('connect.php');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$post = $_POST['passport'];
$course = $_POST['course'];

$sql = "INSERT INTO `register_td` (`FirstName`, `LastName`, `Email`, `PhoneNumber`, `Gender`, `DateOfBirth`, `PassPort`, `Course`) VALUES ('$fname', '$lname', '$email', '$phone', '$gender', '$date', '$post', '$course')";
$query = mysqli_query($connect, $sql);

if ($query) {
	header('location:admin.php');
}
else{
	echo "An Error Occured";
}

?>