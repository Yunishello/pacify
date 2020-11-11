
<?php

require('connect.php');

$sql = "SELECT `id`, `FirstName`, `LastName`, `DateCreated`FROM `register_td`";
$query = mysqli_query($connect, $sql);

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
	<div class="body2">
		<nav class="nav">
			<ul class="ul">
				<li class="li"><a class="anchor" href="../index.php"><b class="pacify">PACIFYLABS</b></a></li>
				<div class="div">
					<li class="li"><a class="anchor" href="admin-login.php"><button class="button">LOGOUT</button></a></li>
				</div>
			</ul>
		</nav>

		<div class="row">
			<div class="col-2 nav2">
				<nav>
					<ul class="ul">
						<li class="li2 active" >
							<a class="anchor2" href="admin.php">Dashboard</a>
						</li><br>
						<li class="li2">
							<a class="anchor2" href="comment-index.php">Comment</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-7 conta">
				<div class="container">
					<p class="para"> > REGISTERED USERS</p>
					<table class="table">
						<thead>
							<th class="th">ID</th>
							<th class="th">FIRST</th>
							<th class="th">LAST</th>
							<th class="th">ACTION</th>
						</thead>
						<tbody>
							<?php
								$i = 1;
								WHILE($row = mysqli_fetch_array($query)){
							?>	
							<tr class="tr">
								<td class="td">
									<?php echo $i++;
											$id = $row['id'];
										?>
								</td>
								<td class="td">
									<?php echo $row['FirstName'] ?>
								</td>
								<td class="td">
									<?php echo $row['LastName'] ?>
								</td>
								<td class="td">
										<a class="aview" href="formview.php?id=<?php echo $id ?>">
											<img class="img1" src="../images/image.jpg">
										</a>
											<a class="aview" href="editform.php?id=<?php echo $id ?>">
												<img class="img1" src="../images/pencil.jpg">
											</a>
											<a class="aview" href="delete.php?id=<?php echo $id ?>">
												<img class="img1" src="../images/trash.jpg">
											</a>
								</td>
							</tr>
							<?php
									}
									?>
						</tbody>
					</table>
				</div><br>
				<div class="row">
						<div class="container">
							<p class="para"> > quick message</p>
							<form class="row">
								<div>
									<input class="col-12 input" type="text" name="email" placeholder="Email:"><br><br><br><br>
								</div>
								<div>
									<input class="col-12 input" type="text" name="subject" placeholder="Subject:"><br><br><br><br>
								</div>
								<div>
									<textarea class="col-12 textarea" placeholder="Your Message"></textarea><br><br><br><br>
								</div>
								<div class="row">
									<div class="col-11"></div>
									<div class="col-1 sub">
										<input type="submit" class="submit" name="submit" value="Send">
									</div>
									
								</div>
							</form><br>
						</div>
					</div><br><br>
			</div>
			<div class="col-3">
				<div class="row">
					<div class="contain">
						<div class="note">notifications</div>
						<div>
						</div>
					</div>
				</div><br><br>
				<div class="row">
					<div class="contain">
						<div class="note">messages</div>
						<div>
							<?php echo $row['Email'];?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

</body>
</html>