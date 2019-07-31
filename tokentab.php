<?php
$con=mysqli_connect("localhost","root","","alps");
			if(!$con)
			{
				die ("Connection Failed");
			}
	$sql="CREATE TABLE gtoken(Ciz INT,Dpannum INT, FOREIGN KEY (Ciz) REFERENCES guser(Ciz), FOREIGN KEY (Dpannum) REFERENCES gdist(Dpannum),Tnum INT AUTO_INCREMENT PRIMARY KEY )";
			if(mysqli_query($con,$sql))
			{
				$sql="CREATE TABLE ptoken(Licence INT,Dpannum INT, FOREIGN KEY (Licence) REFERENCES puser(Licence), FOREIGN KEY (Dpannum) REFERENCES pdist(Dpannum),Tnum INT AUTO_INCREMENT PRIMARY KEY)";
				if(mysqli_query($con,$sql)){
					echo "Success";
				}
			}
			else echo "error".mysqli_error($con);

?>