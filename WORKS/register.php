<?php  ?>
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
				<div class="div">
					<a class="anchor" href="admin-login.php">Admin</a>
				</div>
			</ul>
		</nav><br><br><br><br>

		<div class="row">
			
			<div class="col-1"></div>
			<div class="col-10 contact">
				<div class="cont">
					<form action="register_process.php" method="post" enctype="multipart/form-data">
						<h1 class="h1" align="center">OUR REGISTER FORM</h1>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>FIRSTNAME:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-8" type="text" name="firstname" placeholder="Firstname pls.." required>
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
								<input class="col-8" type="text" name="lastname" placeholder="Enter your Lastname.." required>
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
								<input class="col-8" type="email" name="email" placeholder="Enter your Email.." required>
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
								<input class="col-8" type="text" name="phone" placeholder="Enter your Phone number.." required>
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
								<select class="col-8" name="gender" required>
									<option>SELECT GENDER</option>
									<option name="gender">MALE</option>
									<option name="gender">FEMALE</option>
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
								<input class="col-8" type="date" name="date" placeholder="Enter your date of birth pls.." required>
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
								<input class="col-8" type="file" name="passport" id="passport" placeholder="Firstname pls.." required>
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
								<select class="col-8" name="course" required="required">
									<option>Choose Course</option>
									<option name="course">HTML</option>
									<option name="course">CSS</option>
									<option name="course">JAVASCRIPT</option>
								</select>
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-4"></div>
							<div class="col-5"><input class="input input2 col-10" type="submit" name="submit" value="FINISH"></div>
							<div class="col-3"></div>
						</div>
						<div class="row">
							<div class="col-1"></div>
							<b class="col-1">NOTE:</b>
							<marquee class="col-9">Write your name starting with capital letter, passport must be in jpeg format with the width of 200 pixels and height of 100 pixels. Your username is your <b>Email</b> and your password is your <b>phone number</b></marquee>
							<div class="col-1"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-1"></div>
		</div><br>
	</div>

</body>
</html>