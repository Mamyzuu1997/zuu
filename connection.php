<?php
$servername="localhost";
$username="root";
$password="";

try{
	$conn =new PDO("mysql:host=$servername; dbname=letter_tracking",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOexe $e){
	echo "connection failed".$e->getMessage();
}




?>