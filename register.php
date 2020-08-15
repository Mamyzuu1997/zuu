<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
  <style >
    
  </style>ul li{
      list-style-type: none;
      display: inline-block;
      margin-right: 20px;
      height: 30px;
    }
	<meta name="viewport" content="width=divice-width,initial-state=1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

     <div class="container">
     	<div class="row" >
     		<div class="col-md-3" ></div>
     		<div class="col-md-6" >
          <form action="insert.php" method="POST">
      
  <fieldset>
    <legend>REGISTER:</legend>
    Username:<br>
    <input type="text" name="name" placeholder="enter Username">
    <br>
    Password:<br>
    <input type="Password" name="Password" placeholder="enter password" id="pass" required="">
    <br>
     First name:<br>
     <input type="text" name="Firname" placeholder="Enter Firname">
     <br>
     Last name:<br>
     <input type="text" name="lname" placeholder="Enter Lastname">
     <br>
      Email:<br>
      <input type="Email" name="Email" placeholder="Email eg:name@gmail.com" style="width: 45% ">
      <br>
      Role:<br>
           <select class="form-control" name="role">
                              <option></option>
                              <option>Admin</option>
                              <option>Student</option>
                              <option>Lecture</option>
                         </select>
     
    <input type="submit" onclick="return validate()" value="Submit" class="btn btn-info" name="submit">
  </fieldset>
                         
</form> 
  
                    
     		</div>
     		<div class="col-md-3"></div>
     	</div>
     	
     </div>
     <script type="text/javascript">
          var pass=document.getElementById('pass');
          function validate(){

               if (pass.value.length!==8){
                    alert("password must be 8 characters");
                    return false;
               }
          }
          
          if (filter_var)($email, FILTER_VALIDATE_EMAIL)) {
               <?php echo ["email is valid"]; ?>

}else{
  <?php echo ["not valid" ];?>
}
<?php echo filter_var($dirtyemail,FILTER_SANITIZE_EMAIL);?>
     </script>
     <style type="text/css">
     body{
          background-image: url(img/desert.jpg);
          background-size: cover;
     }
</style>
</body>
</html>