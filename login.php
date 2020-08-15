<!DOCTYPE html>
<?php
include "connection.php";
?>
<html>
<head>
	<title>Login</title>
	<style >
		ul li{
			list-style-type: none;
			display: inline-block;
			margin-right: 20px;
		}

	</style>
	<meta name="viewport" content="width=divice-width,initial-state=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="bg">
	<div  style="border: 1px solid; background-color: #87CEFA" >
     		<h1 style="color: black; text-align:center" >SUZA LETTER TRACKING SYSTEM</h1>
     		<ul>
     			<li><a href="index.php">Home</a></li>
     			<li><a href="contact.php">Contact</a></li>
     			<li><a href="aboutus.php">About</a></li>
     			<li><a href="login.php">Login</a></li>
                
     		</ul>

     	</div>
     	

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<form id="log" style="border: 1px solid; margin-top: 150px" action="loginhandler.php" method="POST" >
				<div style="border: 1px solid; background-color: #87CEFA"><h2 style="text-align: center;">Login Form</h2></div>

			<form >
				<div class="formgroup">
					<label >Username</label>
					<input type="text" class="form-control" placeholder="Username" style="width: 80%" name="user" required="">
				</div>
				<div class="formgroup">
					<label>Password</label>
					<input type="Password" class="form-control" placeholder="Password" style="width: 80%" name="pass" required="">
				</div>
				<div class="checkbox">
					<label><input type="checkbox">Remember me</label>
				</div>
				<button type="submit" class="btn btn-success" name="submit">Login</button>
				<div>
					<p style="margin-right: 50px">New user <a href="register.php">Sign Up</a></style>
						</p>
                     
				</div>
				
			
					
				
			</form>
	</div>
	<div class="col-md-4 col-sm-4 col-xs-12"></div>
</div>
</div>
<style type="text/css">
	body{
		background-image: url(img/desert.jpg);
		background-size: cover;
	}
	.log{
		margin-top: 60px;
		box-shadow: 0px 0px 10px 1px grey;
		border-radius: 5px;
		padding-bottom: 20px;
		background: white;
	}
</style>
</body>
</html>