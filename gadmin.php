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

<br><br><br><br><br>
				<?php validate_gdist() ?>
<form method="POST" class="adminform" >
	
	<input type="text" name="Dname" placeholder="Distributer Name" class="textarea" required><br>
	<input type="text" name=Dpannum" placeholder="Pan Number" class="textarea" required><br>
	<input type="text" name="Ownid" placeholder="Ownid" class="textarea" required><br>
	<input type="Email" name="Email" placeholder="Email Id" class="textarea" required><br>
	<input type="Password" name="Pass" placeholder="Password" class="textarea" required><br>
	<br>
	<input type="Submit" name="Submit" value="Submit"  class="confbtn">
	<input type="Reset" name="Reset" value="Reset" class="warnbtn">

</form>


<?php include("includes/footer.php") ?>
