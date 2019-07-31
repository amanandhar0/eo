<?php include("functions/init.php") ?>


<!DOCTYPE html>

<head>
	<title>Homepage</title>


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
						<li><a href="Login.php" >Log in</a></li><!-- 
						<li><a href="logout.php" >Log Out</a></li> -->
					</ul>
				</div>



<br><br><br><br>
				
			<a href="Notification.php">Notify USers:</a>
		<br><a href="">Today's sales</a>
		<br><a href="queue.php">Take picture of Queue</a>
			
			<!-- 
<script>
			


 	function notification(){
 		var msg=document.getElementById("noti").value;
		Push.create("This is notification");
	}
	notification();
</script>
 -->



		<?php include("includes/footer.php") ?>
