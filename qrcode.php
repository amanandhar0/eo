<?php include("includes/header.php") ?>


				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="logo.png" ></a>
					<ul>
						<li><a href="homepage.php" class="active">Home</a></li>
						<!-- <li><a href="about.php" >About</a></li> -->
						<li><a href="" >Gas</a></li>
						<li><a href="Qrcode.php" >Petroleum</a></li>
						<!-- <li><a href="user.php"></a></li> -->
						<li><a href="features.php">Features</a></li>
						<!-- <li><a href="adminfeature.php">Admin</li> -->
						<li><a href="Login.php" >Log in</a></li>
						<!-- <li><a href="logout.php" >Log Out</a></li> -->
					</ul>
				</div>




<center>
<br><br><br><br><br>

<form action="yourqr.php" class="login">
	<h2>Book for distributor Nepal oil</h2>
	<hr width="80%" align="center">
	<input type="Text" name="Quantity" placeholder="Petrol in liters" class="textarea">
	<br>Payment Options:<select class="textarea">
		<option>Esewa</option>
		<option>Cash</option>
		<option>NIC Asia</option>

	</select>
<br>
<input type="Submit" name="submit" value="Book Now!" class="confbtn">
</form>

</center>
</body>
</html>