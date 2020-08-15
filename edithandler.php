<?php
	require 'connection.php';
      if (isset($_POST['edit'])) {
       $id =$_POST['id'];
       $uname =$_POST['name'];
       $pass =$_POST['Password'];
       $Firname =$_POST['Firname'];
       $Lastname=$_POST['lname'];
       $Email =$_POST['Email'];
       $Role =$_POST['role'];
       $sql="UPDATE users SET Username=:name, Password= :Password, Firstname= :Firname, Lastname= :lname, Email= :Email, Role= :role WHERE id=:id";
       $stmt = $conn->prepare($sql);
       $stmt ->execute(array(':id' =>$id,'name'=>$uname,'Password'=>$pass,'Firname'=>$Firname,'lname'=>$Lastname,'Email'=>$Email, 'role'=>$Role));
       $_SESSION['success']="Record update";
   header('location:profile.php');
       
        }
   ?>