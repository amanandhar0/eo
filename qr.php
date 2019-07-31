<?php include("includes/header.php") ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


				<div class="navbar">
					<a href="index.php" class="channel" ><img class="logo" src="" ></a>
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
				<br><br><br>

<textarea onkeyup="generate_qrcode(this.value)" cols="50" rows="5"></textarea>
<div id="result"></div></center>
</body>
<script>
 function generate_qrcode(sample){
 $.ajax({
 type: 'post',
 url: 'generator.php',
 data : {sample:sample},
 success: function(code){
 $('#result').html(code);
 }
 });
 }
</script>
</html>