<?php
require('connect.php');
$id = $_POST['id'];
//echo "$id";
//exit();
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$post = $_POST['passport'];
$course = $_POST['course'];

$sql = "UPDATE `register_td` SET `FirstName` = '$fname', `lastName` = '$lname', `Email` = '$email', `PhoneNumber` = '$phone',`Gender` = '$gender', `DateOfBirth` = '$date',`PassPort` = '$post', `Course` = '$course' WHERE `id` = '$id'";
$query = mysqli_query($connect, $sql);

if ($query==true) {
	echo "Updated Sucessfully";
}
else{
	echo "An Error Occured During Update";
}

?>