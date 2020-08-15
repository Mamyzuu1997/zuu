<?php
require 'connection.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql="DELETE FROM users WHERE id=:id";
	$stmt = $conn->prepare($sql);
    $stmt->execute(array(':id' => $_GET['id']));

}
header('location:profile.php');
?>