<?php
session_start();
if (isset($_POST["submit"])) {
	include 'connection.php';
	echo $Uname=$_POST['name'];
	$Pass=$_POST['Password'];
	$Fname=$_POST['Firname'];
	$Lname=$_POST['lname'];
	$mail=$_POST['Email'];
	$Role=$_POST['role'];
	$sql="INSERT INTO users (Username,Password,Firstname,Lastname,Email,Role) VALUES(:name,:Password,:Firname,:lname,:Email,:role)";
	$result=$conn->prepare($sql);
	$stmt=$result->execute(array(':name'=>$Uname,':Password'=>$Pass,':Firname'=>$Fname,':lname'=>$Lname,':Email'=>$mail,':role'=>$Role));
	$_SESSION ['Success']="user are register";
	header("location:login.php");
}


?>
