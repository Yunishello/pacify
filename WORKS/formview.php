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
		</nav><br><br>
		<div class="row">
			<div class="col-1"></div>
			<div class="col-10 contact">
				<div class="cont">
					<h1 class="h1" align="center"><?php echo $row['FirstName']; ?> <?php echo $row['LastName']; ?></h1>
					<table class="table">
						<tbody>
							<tr class="tr tr2">
								<th class="th">FIRSTNAME</th>
								<td class="td">
									<?php 
										echo $row['FirstName'];
									?>
								</td>
							</tr>
							<tr class="tr tr2">
								<th class="th">LASTNAME</th>
								<td class="td">
									<?php 
										echo $row['LastName'];
									?>
								</td>
							</tr>
							<tr class="tr tr2">
								<th class="th">EMAIL</th>
								<td class="td td2">
									<?php 
										echo $row['Email'];
									?>
								</td>
							</tr>
							<tr class="tr tr2">
								<th class="th">PHONENUMBER</th>
								<td class="td">
									<?php 
										echo $row['PhoneNumber'];
									?>
								</td>
							</tr>
							<tr class="tr tr2">
								<th class="th">GENDER</th>
								<td class="td">
									<?php 
										echo $row['Gender']; 
									?>
								</td>
							</tr>
							<tr class="tr tr2">
								<th class="th">DATE OF BIRTH</th>
								<td class="td">
									<?php 
										echo $row['DateOfBirth'];
									?>
								</td>
							</tr>
							<tr class="tr tr2">
								<th class="th">PASSPORT</th>
								<td class="td">
									<?php 
										echo $row['PassPort']; 
									?>
								</td>
							</tr>
							<tr class="tr tr2">
								<th class="th">COURSE</th>
								<td class="td">
									<?php 
										echo $row['Course'];
									?>
								</td>
							</tr>
							<tr class="tr tr2">
								<th class="th">DATE REGISTERD</th>
								<td class="td">
									<?php 
										echo $row['DateCreated']; 
									?>
								</td>
							</tr>
						</tbody>
					</table><br>
					<a class="anchor input2" href="admin.php">FINISH</a>
					<br><br>
				</div>
			</div>
			<div class="col-1"></div>
		</div><br>
	</div>

</body>
</html>