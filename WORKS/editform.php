<?php
$sentID = $_GET['id'];

//echo "$sentID";

require('connect.php');

$sql = "SELECT * FROM `register_td` WHERE `id`='$sentID'";
$query = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<title>PACIFYLABS INTERGRATED SOLUTIONS</title>
	<link rel="stylesheet" type="text/css" href="../css/s.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<div class="body">
		<nav class="nav">
			<ul class="ul">
				<li class="li"><a class="anchor" href="../index.php"><b class="pacify">PACIFYLABS</b></a></li>
				<div class="div ">
					<div class="dropdown">
						<li class="li"><a class="anchor" href="#">LOGIN</a></li>
						<div class="dropdown-content">
							<ul class="ui">
								<li class="li2"><a class="anchor" href="admin-login.php">Admin</a></li>
								<li class="li2"><a class="anchor" href="user-login.php"> User</a></li>
							</ul>
						</div>
					</div>
					<li class="li"><a class="anchor" href="register.php">REGISTER</a></li>
				</div>
			</ul>
		</nav><br><br><br><br>

		<div class="row">
			<div class="col-1"></div>
			<div class="col-10 contact">
				<div class="cont">
					<h1 class="h1" align="center">EDIT YOUR PROFILE</h1>
					<form action="update.php" method="post">
						<input type="hidden" name="id" value="<?php echo $sentID ?>">
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>FIRSTNAME:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-8" type="text" name="firstname" placeholder="Firstname pls.." value="<?php echo $row['FirstName'] ?>" required>
							</div>
							<div class="col-1"></div>
						</div>
						
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>LASTNAME:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-8" type="text" name="lastname" placeholder="Enter your Lastname.." value="<?php echo $row['LastName'] ?>" required>
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>EMAIL:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-8" type="email" name="email" placeholder="Enter your Email.." value="<?php echo $row['Email'] ?>" required>
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>PHONE NUMBER:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-8" type="text" name="phone" placeholder="Enter your Phone number.." value="<?php echo $row['PhoneNumber'] ?>" required>
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>GENDER:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<select class="col-8" name="gender" value="<?php echo $row['Gender'] ?>" required>
									<option>SELECT GENDER</option>
									<option value="<?php echo $row['Gender'] ?>" name="gender">MALE</option>
									<option value="<?php echo $row['Gender'] ?>" name="gender">FEMALE</option>
								</select>
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>DATE OF BIRTH:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-8" type="date" name="date" placeholder="Enter your date of birth pls.." value="<?php echo $row['DateOfBirth'] ?>" required>
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>PASSPORT:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-8" type="FILE" name="passport" placeholder="Firstname pls.." value="<?php echo $row['PassPort'] ?>" required>
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>COURSE:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<select class="col-8" name="course" value="<?php echo $row['Course'] ?>" required>
									<option name="course">HTML</option>
									<option name="course">CSS</option>
									<option name="course">JAVASCRIPT</option>
								</select>
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-4"></div>
							<div class="col-5"><input class="input input2 col-10" type="submit" name="submit" value="UPDATE"></div>
							<div class="col-3"></div>
						</div>
						
						
					</form><br><br>
				</div>
			</div>
			<div class="col-1"></div>
		</div><br>
	</div>

</body>
</html>