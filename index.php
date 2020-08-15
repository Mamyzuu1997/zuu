<!DOCTYPE html>
<?php
include "connection.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<title>letter tracking</title>
	<style >
		ul li{
			list-style-type: none;
			display: inline-block;
			margin-right: 20px;
		}
		.img{
			width:10%;
			 height:100px;
			 float: right;
			 margin-top: -75px;


		}

	</style>
	<!-- <link rel="stylesheet" type="text/css" href="ccs/style.css" > -->
</head>
<body>
     <header>
     	<div  style="border: 1px solid; background-color: #87CEFA" >
     		<h1 style="color: black; text-align:center">SUZA LETTER TRACKING SYSTEM</h1>
     		<img  class="img" src="img/logos.png "  >
     		<ul>
     			<li><a href="#">Home</a></li>
     			<li><a href="contact.php">Contact</a></li>
     			<li><a href="aboutus.php">About</a></li>
     			<li><a href="login.php">Login</a></li>
                    <li><a href="">Logout</a></li>
     		</ul>
     	</div>
     	
     	<div class="head">
     			<img src="img/suza.jpg" width="100%" height="800px">
     		</div>

     	
     </header>
</body>
</html>