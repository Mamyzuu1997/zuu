    <!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>Profile</title>
  		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  		
</head>
<body>
	<div class="container">
		<div class="row">
<?php
require 'connection.php';
$stmt = $conn->query("SELECT * from users");
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table class="table table-border">'."\n";
echo "<th>id</th>";
echo "<th>Username</th>";
echo "<th>Password</th>";
echo "<th>Firstname</th>";
echo "<th>Lastname</th>";
echo "<th>Email</th>";
echo "<th>Role</th>";




foreach ($row as $row) {
	echo "<tr><td>";
	echo ($row['id']);
	echo "</td><td>";
	echo ($row['Username']);
	echo "</td><td>";
	echo ($row['Password']);
	echo "</td><td>";	
	echo ($row['Firstname']);
	echo "</td><td>";
	echo ($row['Lastname']);
	echo "</td><td>";
	echo ($row['Email']);
	echo "</td><td>";
	echo ($row['Role']);
	echo "</td><td>";
         
	echo '<a href="edit.php?id='.$row['id'].'" class="btn btn-info">Edit</a>';
	echo "\t";
	echo '<a onclick="return confirm("Are you sure you want to delete this");" href="delete.php?id='.$row['id'].'" class="btn btn-danger">Delete</a>';
	echo "</td></tr>";
}

?>
</table>
</div>
</div>
</body>
</html>          
              
              
              
            
