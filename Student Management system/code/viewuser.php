<html>
    <head>
    
 </head>
    <body>

<?php 
        include_once("menu.php");
         

include_once("db-config.php");
       
// define variables and set to empty values
    $name = ""; 
    $email = ""; 
      
if ($_SERVER["GET_METHOD"] == "POST" && isset($_POST["name"])) {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  
 
$query = "SELECT * FROM students_marks";


echo '<table border="1"  cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          
         
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["email"];
       
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  
                   
                     </tr>';
       
exit();
        
    }
    $result->free();
     include_once("edituser.php");
} 
?>

</body>
</html>