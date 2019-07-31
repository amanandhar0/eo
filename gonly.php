<?php include("includes/header.php") ?>
<div class="navbar">
					<a href="homepage.php" class="channel" ><img class="logo" src="logo.png" ></a>
					<ul>
						<li><a href="homepage.php" class="active">Home</a></li>
						<!-- <li><a href="about.php" >About</a></li> -->
						<li><a href="" >Gas</a></li>
						<li><a href="Qrcode.php" >Petroleum</a></li>
						<li><a href="Login.php" >Log In</a></li>
						<!-- <li><a href="logout.php" >Log Out</a></li> -->
					</ul>
				</div>
<center>
<form method="POST" class="gasonly">
		<input type="text" name="Ciz" placeholder="Citizenship Number" class="textarea" required><br>	
		<input type="text" name="Fname" placeholder="First Name" class="textarea" required><br>
		<input type="text" name="Lname" placeholder="Last Name" class="textarea" required><br>
		
		<input type="text" name="Street" placeholder="Address" class="textarea" required><br>
		<input type="text" name="Phone" placeholder="Phone number" required class="textarea"><br>
		<input type="text" name="Email" placeholder="Email" required class="textarea"><br>
		<input type="password" name="Pass" placeholder="password" required class="textarea"><br>
		<input type="Submit" name="Submit" value="Submit" class="confbtn" >
		<input type="Reset" name="Reset" value="Reset" class="warnbtn">

</form>
</center>



<?php include("includes/footer.php") ?>
