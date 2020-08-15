<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=divice-width,initial-state=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
     <div class="container">
     	<div class="row" >
     		<div class="col-md-3" ></div>
     		<div class="col-md-6" >
                    <form method="POST" action="update.php" style="border: 1px solid">
                    <div style="border: 1px solid;background-color: #87CEFA">
                         <?php
                         include('connection.php');
                         if(isset($_GET['id'])){
                              $id=$_GET['id'];
                              $sql="select * from users where id='$id'";
                              $stmt=$conn->query($sql);
                              $r=$stmt->fetch(PDO::FETCH_ASSOC);                        
                         ?>
     			</div>

     			<label class="label col-md-3 control-label">Username</label>
     			<div class="col-md-9" style="margin-top: 10px">
     				<input type="text" class="form-control" value="<?php echo $r['Username']; ?>" name="name" placeholder="name">
                         <input type="hidden" class="form-control" value="<?php echo $id?>" name="id" placeholder="name">
                         
     			</div>
               
     			<label class="label col-md-3 control-label">Password</label>
     			<div class="col-md-9" style="margin-top: 10px">
     				<input type="Password" class="form-control" value="<?php echo $r['Password']; ?>" name="Password" placeholder="Password" id="pass" required="">
     				
     			</div>

     			<label class="label col-md-3 control-label">First Name</label>
     			<div class="col-md-9" style="margin-top: 10px">
     				<input type="text" class="form-control" value="<?php echo $r['Firstname']; ?>"name="Firname" placeholder="First name">
     			</div>


                   <label class="label col-md-3 control-label">Last name</label>
     			<div class="col-md-9" style="margin-top: 10px">
     				<input type="text" class="form-control" value="<?php echo $r['Lastname']; ?>" name="lname" placeholder="Last name">
     			</div>

                   
                    <label class="label col-md-3 control-label">Email</label>
     			<div class="col-md-9" style="margin-top: 10px">
     				<input type="Email" class="form-control"value="<?php echo $r['Email']; ?>" name="Email" placeholder="Email eg:name@gmail.com">
     			</div>


                   <label class="label col-md-3 control-label">Role</label>
     			<div class="col-md-9" style="margin-top: 10px">
     				<select class="form-control" name="role">
     					<option></option>
                              <option>Admin</option>
     					<option>Student</option>
     					<option>Lecture</option>
     				</select>
     			</div>
                    <?php } ?>
                    <input type="submit" name="update" value="update" class="btn btn-info" >
                 </form>
     		</div>
     		<div class="col-md-3"></div>
     	</div>
     	</div>
</body>
</html>