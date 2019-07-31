<?php include("includes/header.php") ?>
<div class="navbar">
					<a href="homepage.php" class="channel" ><img class="logo" src="logo.png" ></a>
					<ul>
						<li><a href="homepage.php" class="active">Home</a></li>
						<!-- <li><a href="about.php" >About</a></li> -->
						<li><a href="" disabled>Gas</a></li>
						<li><a href="Qrcode.php" >Petroleum</a></li>
						<li><a href="Login.php" >Log In</a></li>
						<!-- <li><a href="logout.php" >Log Out</a></li> -->
					</ul>
				</div>


		<?php display_message(); ?>

		<?php validate_user_login(); ?>
<br><br><br><br><br>

<center>


	<form class="login" method="POST">
		<center><h1>Log In</h1></center>
		<hr width="80%" align="center">
		<input type="text" class="textarea" name="email" minlength="10" required placeholder="email"><br><bR>
		<input type="Password" name="Password" class="textarea" required placeholder="Password"><br>
		<input type="Submit" name="Log In" class="logbtn"><input type="Reset" name="Log In" class="warnbtn"><br>


<br>
	<a href="createaccount.php">Don't Have Account? Click Me!</a>

	</form>
</center>
	
	<?php 	include("includes/footer.php"); ?>