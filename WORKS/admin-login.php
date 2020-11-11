<?php

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
					<form action="login.php" method="post">
						<h1 class="h1" align="center">ADMIN LOGIN</h1>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>USERNAME:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-10 glyphicon glyphicon-log-in" type="text" name="username" placeholder="Username pls..">
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-2">
								<label>PASSWORD:</label>
							</div>
							<div class="col-1"></div>
							<div class="col-6">
								<input class="col-10" type="text" name="password" placeholder="Password pls..">
							</div>
							<div class="col-1"></div>
						</div>
						<div class="row">
							<div class="col-2"></div>
							<div class="col-8"><input class="col-12 input2" type="submit" name="submit" value="FINISH"></div>
							<div class="col-2"></div>
						</div>
						
						
					</form>
				</div>
			</div>
			<div class="col-1"></div>
		</div><br>
	</div>

</body>
</html>