<?php include("functions/init.php") ?>


<!DOCTYPE html>

<head>
	<title>Homepage</title>
	<script src="push.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
				<div class="navbar">
					<a href="homepage.php" class="channel" ><img class="logo" src="logo.png" ></a>
					<ul>
						<li><a href="homepage.php" class="active">Home</a></li>
						<!-- <li><a href="about.php" >About</a></li> -->
						<!-- <li><a href="" >Gas</a></li> -->
						<li><a href="Qrcode.php" >Petroleum</a></li>
						<!-- <li><a href="Login.php" >Log In</a></li> -->
						<li><a href="logout.php" >Log Out</a></li>
					</ul>
				</div>
<br><br><br><br><center>
		<form method="POST" class="login" >
			<br><br><br><br><br><br>

			<strong>Type message to send as Notification::</strong>
				
				<input type="text" name="noti" id="noti" class="textarea" placeholder="Notification"><br><Br>
				<input type="submit" name="submit" class="confbtn" onclick="notification();">
				

				<script type="text/javascript">


					function notification(){

					var msg=document.getElementById("noti").value;
					Push.create(msg);
					
					// window.location.replace("homepage.php");
					}


				

				</script>

			</form></center>



	<?php include("includes/footer.php") ?>
