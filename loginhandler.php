<?php
session_start();
include 'connection.php';
if (isset($_POST["submit"])){
	$username=$_POST["user"];
	$password=$_POST["pass"];
	$sql="SELECT * FROM users WHERE Username= :username AND Password= :password";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array("username"=>$username,"password"=>$password));
	if ($stmt->rowCount()>0) {

  $data = $stmt->fetch(PDO::FETCH_ASSOC);

   echo $_SESSION["Role"]=$data["Role"];

   if ($_SESSION["Role"]==="Student"){
   	header("location:Students.php");

   }else if($_SESSION["Role"]==="admin"){
   	header("location:admin.php");
   }
     else if($_SESSION["Role"]==="lecture"){
     	header("location:Lectures.php");
     }

	}else{
		header("location:login.php");
	}	
}
  ?>
