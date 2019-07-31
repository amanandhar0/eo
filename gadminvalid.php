

<?php 
include("includes/header.php");
	function gadmin_valid(){
		$name				=$_POST['$Dname'];
		$Dpannum			=$_POST['$Dpannum'];
		$Ownerid			=$_POST['$Ownid'];
		$gemail				=$_POST['$Email'];
		$gpass				=$_POST['$Pass'];
		if (email_exists($email)) {

			return false;

		}else{
			$gpass			=md5( $pass );


$sql=<<<DELIMITER
			INSERT INTO gdist (Dname,Dpannum,Ownid,Email,Pass) VALUES("$name",$Dpannum,$Ownerid,"$gemail"","$gpass")	
DELIMITER;


				$result=query($sql);

				return true;

		}
	}

 ?>