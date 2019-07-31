<?php 

// function logged_in(){

// 	if(isset($_SESSION[email]))

// }


// function logged_in(){

// 	if (isset($_SESSION['email'])||isset($_COOKIE['email'])) {

// 		return true;

// 	}else{

// 		return false;

// 	}
// }



function clean($string){
	return htmlentities($string);
}

function redirect($location){
	return header("location:{$location}");  
}

function set_message($message){
	if (!empty($message)) {
		$_SESSION['message']=$message;
	}else{
		$message=" ";
	}
}

function display_message(){
	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function token_generator(){
	$token=$_SESSION['token']=md5(uniqid(mt_rand(),true));
	return $token;
}

function validation_errors($error_message){

$error_message= <<<DELIMITER
			<strong>Warning!
				$error_message</strong>
				
DELIMITER;

				return $error_message;

}

function email_exists($email){

	$sql="(SELECT * FROM gdist WHERE email='$email') UNION (SELECT * FROM guser WHERE email='$email') UNION (SELECT * FROM puser WHERE email='$email') 
	UNION (SELECT * FROM gdist WHERE email='$email')";

	$result=query($sql);

	if (row_count($result)==1) {
		return true;
	}else{
		return false;
	}

}




function send_email($email, $subject, $msg, $headers){

	return mail($email, $subject, $msg, $headers);
		
	

}


function validate_gdist(){//1

		$errors=[];
	if ($_SERVER['REQUEST_METHOD']=='POST') {//2

		$Dname				=clean($_POST['Dname']);
		$Dpannum			=clean($_POST['Dpannum']);
		$Ownid				=clean($_POST['Ownid']);
		$password			=clean($_POST['Pass']);
		$email				=clean($_POST['Email']);
		
		 		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	     			   echo "Invalid format! Not valid email";
	      			  $f=0;
	  			  }

				if (!empty($errors)) {//4
			 		foreach ($errors  as $error) {//5
			 			
			 			echo validation_errors($error);
					}//5
				}
			else{//6

				

			if (register_gdist($Dname,$Dpannum,$Ownid,$password,$email)) {//7
				set_message("<p class='success'>Email created successfully</p>");
				
				redirect("homepage.php");
			}else{//8 close 7
				set_message("<p class='danger'>Sorry! the email you provided is already used .</p>");
				
				redirect("gadmin.php");

		}//8
	}
}
}



function register_gdist($Dname,$Dpannum,$Ownid,$password,$email){

		$name				=escape($Dname);
		$Dpannum			=escape($Dpannum);
		$Ownerid			=escape($Ownid);
		$gemail				=escape($email);
		$gpass				=escape($password);
		if (email_exists($email)) {

			return false;

		}else{
			$gpass			=md5( $password );

			$sql="INSERT INTO gdist (Dname,Dpannum,Ownid,Email,Pass) VALUES ('$name',$Dpannum,'$Ownerid','$gemail','$gpass')";


				$result=query($sql);

				return true;

		}
}




function validate_pdist(){

		$errors=[];
	if ($_SERVER['REQUEST_METHOD']=='POST') {

		$Dname				=clean($_POST['Dname']);
		$Dpannum			=clean($_POST['Dpannum']);
		$Ownid				=clean($_POST['Ownid']);
		$password			=clean($_POST['Pass']);
		$email				=clean($_POST['Email']);
		
		 		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	     			   echo "Invalid format! Not valid email";
	      			
	  			  }

				if (!empty($errors)) {
			 		foreach ($errors  as $error) {
			 			
			 			echo validation_errors($error);
					}
				}
			else{

				

			if (isset($Dname,$Dpannum,$Ownid,$password,$email)) {
				// set_message("Your email has been activated successfully.");
							//register_pdist($Dname,$Dpannum,$Ownid,$password,$email);

	 			$gpass	=md5( $password );
				$sql="INSERT INTO pdist (Dname,Dpannum,Ownid,Email,Pass) VALUES ('$name',$pannum,'$Ownerid','$gemail','$gpass')";


				$result=query($sql);
				set_message("<p class='success'>Your Id has been created successfuly.Please log in to continue</p>");

				
				redirect("login.php");
			}else{
				set_message("<p class='danger'>Sorry! the email you provided is already used .</p>");
				
				redirect("homepage.php");

		}
	}
}
}


function register_pdist($Dname,$Dpannum,$Ownid,$password,$email){

		$name				=($Dname);
		$pannum				=($Dpannum);
		$Ownerid			=($Ownid);
		$gemail				=($email);
		$gpass				=($password);
		if (email_exists($email)) {

			return false;

		}else{
			$gpass	=md5( $password );

			$sql="INSERT INTO pdist (Dname,Dpannum,Ownid,Email,Pass) VALUES ('$name',$pannum,'$Ownerid','$gemail','$gpass')";


				$result=query($sql);

				return true;

		}
}








function validate_user_login(){

	if ($_SERVER['REQUEST_METHOD']=="POST") {
		
		$email		=clean($_POST['email']);
		$password	=clean($_POST['Password']);
		if (!empty($errors)) {
			foreach ($errors as $error) {
				echo validation_errors($error);
			}
		}else{
			if (login_user($email,$password)) {
				set_message("<p class='success'> Loggedin successfully.</p>");
				redirect("index.php");
			}else{
				echo validation_errors("Your credentials doesn't match our data  ");
			}
		}

	}

}

function userpng(){
	
}


/*****************************User login function****************************/
function login_user($email, $password){
	
	$sql="(SELECT * FROM pdist WHERE email='".$email."' )UNION(SELECT * FROM gdist WHERE email='".$email."' )UNION(SELECT * FROM puser WHERE email='".$email."' )UNION(SELECT * FROM guser WHERE email='".$email."' )";
	$result=query($sql);

	if (mysqli_num_rows($result)==1) {
		
		$row 			=	fetch_array($result);
		$db_password	=	$row['p_password'];
		$actype 		= 	$row['p_acc_type'];
		$id 			=	$row['p_id'];
		// $actypep		=	$row['p_acc_type'];


		if (($password)==$db_password) {///password milyo

			if ($RememberMe=="on") {
				setcookie('email',$email,time()+86400);//time() returns time in second from when the user is logged in
				//+60 is timein seconds when the coockie expires i.e. 1 minute
			}

			$_SESSION['email']=$email;
			// if (isset($actype)) {
			$_SESSION['actype']=$actype;

			$_SESSION['id']=$id;
			// }
			// else if (isset($actypep)) {
			// 	$_SESSION['actype']=$_actypep;
			// }
			return true;
		}else{
			return false;
		}

		return true;
	}else{

		return false;
	}
}


 ?>