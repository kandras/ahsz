<?php   

	session_start(); 
	require "config.php";

	If($_POST["submit"])
	{
		$name = $_POST["name"]
		$neptun = $_POST["neptun"]
		$email = $_POST["email"]
		$pass = $_POST["password"]
		$date=date('Y-m-d H:i:s');
		
		If($name=="" || $neptun=="" || $email=="" || $pass=="")
		{
			Echo "please fill the empty field.";
		}
		Else
		{
			$result=mysqli_query($con,"INSERT INTO USER (NEPTUN, NEV, TYPE, PASSWORD, TEAM_ID, DATE_CRT) VALUES ('$neptun','$name',1,'$pass',0,$date)");
			If($res)
			{
				Echo "Record successfully inserted";
			}
			Else
			{
				Echo "ERROR";
			}
		}
	}
?>