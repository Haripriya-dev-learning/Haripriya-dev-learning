<html>
    <head>
      
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
    tr, td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
 </head>
    <body>

<?php 
        include_once("menu.php");

include_once("db-config.php");
 
$query = "SELECT * FROM students_marks";


echo '<table border="1"  cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Mark 1</font> </td> 
          <td> <font face="Arial">Mark 2</font> </td> 
          <td> <font face="Arial">Mark 3</font> </td> 
		  <td> <font face="Arial">Mark 4</font> </td> 
		  <td> <font face="Arial">Mark 5</font> </td> 
		  <td> <font face="Arial">Total</font> </td> 
		  <td> <font face="Arial">Avg %</font> </td>
           <td> <font face="Arial">Edit</font> </td>
          <td> <font face="Arial">Delete</font> </td>
         
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["email"];
        $field3name = $row["firstmark"];
        $field4name = $row["secondmark"];
        $field5name = $row["thirdmark"]; 
		  $field6name = $row["fourthmark"]; 
		    $field7name = $row["fifthmark"]; 
			  $field8name = $row["total"]; 
			  $field9name = $row["average"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
				  <td>'.$field6name.'</td> 
				  <td>'.$field7name.'</td> 
				  <td>'.$field8name.'</td> 
				  <td>'.$field9name.'</td> 
                 <td><a href="editUser.php?id='.$field1name.'">Edit </a></td>
                 <td><a href="delete.php?id='.$field1name.'">Delete </a></td>
               
                   
                     </tr>';
        
    }
    $result->free();
     

    
} 
?>

</body>
</html>