<?php

echo '<script>alert("are sure to delete this")</script>'; 
require('db-config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM students_marks WHERE name='".$id."'"; 
$result = mysqli_query($mysqli,$query) or die ( mysqli_error());
  header("Location: view.php"); 
?>

