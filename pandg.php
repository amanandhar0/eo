<?php include("includes/header.php") ?>
<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="logo.png" ></a>
					<ul>
						<li><a href="homepage.php" class="active">Home</a></li>
						<!-- <li><a href="about.php" >About</a></li> -->
						<li><a href="" >Gas</a></li>
						<li><a href="Qrcode.php" >Petroleum</a></li>
						<!-- <li><a href="Login.php" >Log In</a></li> -->
						<li><a href="logout.php" >Log Out</a></li>
					</ul>
				</div>
					<?php userpng() ?>

					<br><br><br>
<form method="POST" action="homepage.php">
	
		<input type="text" name="Licence" placeholder="Licence number" class="textarea"  required><br>
		
		<input type="text" name="Ciz" placeholder="Citizenship Number" class="textarea" required><br>
		<input type="text" name="Fname" placeholder="First Name" required class="textarea"><br>
		<input type="text" name="Lname" placeholder="Last Name" required class="textarea"><br>
		<input type="text" name="Street" placeholder="Address" required class="textarea"><br>
		<input type="text" name="Phone" placeholder="Phone number" required class="textarea"><br>
		<input type="text" name="Email" placeholder="Email" required class="textarea"> <br>
		<input type="password" name="Pass" placeholder="password" required class="textarea"><br>
		<input type="Submit" name="Submit" value="Submit" class="confbtn">
	<input type="Reset" name="Reset" value="Reset" class="warnbtn">

</form>



<?php include("includes/footer.php") ?>
