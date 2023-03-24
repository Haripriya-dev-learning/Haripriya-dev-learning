
<?php
 include_once("menu.php");
?>
<html>
   <body>
    <div class="container">
    <form action="search.php" method="post" name="Search">
        <div id="div_login">
            <h1></h1>
            <div>
                Enter Name :<input type="text" class="textbox" id="txt_uname" name="name" required placeholder="Username" />
                <input type="submit" value="Search" name="search" id="search" />
            </div> 
        </div>
    </form>
</div>
        
   
 </body>
</html>
<?php

/**
 * Name: Simple PHP Login & Registration Script
 * Tutorial: https://tutorialsclass.com/code/simple-php-login-registration-script
 */

// Start PHP session at the beginning 
session_start();

// Create database connection using config file
include_once("db-config.php");

// If form submitted, collect email and password from form
if (isset($_POST['name'])) {
    $name  = $_POST['name'];
$qery = "select * from students_marks  where name='".$name."' ";
    // Check if a user exists with given username & password
    $result1 = mysqli_query($mysqli,$qery );

    

    $user_matched = mysqli_num_rows($result1);

    
    if ($user_matched > 0) {

    
        
echo '<table border="1"  cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">M 1</font> </td> 
          <td> <font face="Arial">M 2</font> </td> 
          <td> <font face="Arial">M 3</font> </td> 
		  <td> <font face="Arial">M 4</font> </td> 
		  <td> <font face="Arial">M 5</font> </td> 
		  <td> <font face="Arial">Total</font> </td> 
		  <td> <font face="Arial">Avg %</font> </td>
         
      </tr>';

if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
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
                 
                     </tr>';
    }
    $result1->free();
    
} 
    } else {
        echo "Records Not Found <br/><br/>";
    }
}
?>
