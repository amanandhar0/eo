<?php
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die ("Connection Failed");
	}
	else
	{
		$sql="CREATE DATABASE alps";
		
		if(mysqli_query($con,$sql))
		{
			mysqli_close($con);
			$con=mysqli_connect("localhost","root","","alps");
			if(!$con)
			{
				die ("Connection Failed");
			}
			$sql="CREATE TABLE puser(Licence INT PRIMARY KEY, Fname VARCHAR(25),Lname VARCHAR (25),Ciz VARCHAR(50), Street VARCHAR (30), Phone INT, Email VARCHAR(50), Pass Varchar(20))";
			if(mysqli_query($con,$sql))
			{
				$sql="CREATE TABLE guser(Ciz INT PRIMARY KEY, Fname VARCHAR(25),Lname VARCHAR (25), Street VARCHAR (30), Phone INT, Email VARCHAR(50), Pass Varchar(50))";
				if(mysqli_query($con,$sql))
				{
						$sql="CREATE TABLE brand(Bid INT PRIMARY KEY,Bname VARCHAR(50) NOT NULL)";
						if(mysqli_query($con,$sql)){
						$sql="CREATE TABLE gown(Ownid INT PRIMARY KEY, Fname VARCHAR(50), Lname VARCHAR(50))";
						if(mysqli_query($con,$sql))
						{
							$sql="CREATE TABLE gdist(Dpannum INT PRIMARY KEY,
							  Dname VARCHAR(100) NOT NULL, Ownid INT, FOREIGN KEY(Ownid) REFERENCES gown(Ownid),Email VARCHAR(50), Pass Varchar(50))";
								if(mysqli_query($con,$sql))
								{
									$sql="CREATE TABLE pown(Ownid INT PRIMARY KEY, Fname VARCHAR(50), Lname VARCHAR(50))";
									if(mysqli_query($con,$sql)){
									$sql="CREATE TABLE pdist(Dpannum INT PRIMARY KEY,
							  		Dname VARCHAR(100) NOT NULL, Ownid INT, FOREIGN KEY(Ownid) REFERENCES pown(Ownid),Email VARCHAR(50), Pass Varchar(50))";

								if(mysqli_query($con,$sql))
								{
										
									include('tokentab.php');
								}
								
								
								}
					}}	}
				}
			}
		}else echo mysqli_error($con);

	}
		
?>	