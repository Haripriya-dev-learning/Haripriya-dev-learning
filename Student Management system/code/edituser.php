<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
 include_once("menu.php");
include_once("db-config.php");
    
   if(!empty($_REQUEST['id']) )
      {
          
      
$id=$_REQUEST['id'];
  
$query = "SELECT * from students_marks where name='".$id."'"; 
$result = mysqli_query($mysqli, $query) or die ( mysqli_error());
    $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
    if ($result) {
                    echo "<br/><br/>Marks inserted successfully.";
                     
                } else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
        
$row = mysqli_fetch_assoc($result);
 
 
    }else
   {
    
// define variables and set to empty values
    $name = ""; 
    $email = ""; 
    $firstmark = ""; 
    $secondmark= "";
    $thirdmark= "";
    $fourthmark= "";
    $fifthmark= "";
    $total = null;
    $average = null;
    $calculation=null;   
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $firstmark= test_input($_POST["firstmark"]);
  $secondmark= test_input($_POST["secondmark"]);
  $thirdmark= test_input($_POST["thirdmark"]);
  $fourthmark= test_input($_POST["fourthmark"]);
  $fifthmark= test_input($_POST["fifthmark"]);    

 
    
    $total = $firstmark +  $secondmark +  $thirdmark + $fourthmark +  $fifthmark ;echo "<br>";
     $average = $total/5;echo "<br>";
   
     include_once("db-config.php");
    
   $update   ="update students_marks set email='".$email."', firstmark='".$firstmark."', secondmark='".$secondmark."', thirdmark='". $thirdmark."', fourthmark='".$fourthmark."', fifthmark='".$fifthmark."',total='".$total."',average='".$average."',Whername='".$name."'";

//echo $update;
$result = mysqli_query($mysqli, $update);
    
                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/>Marks inserted successfully.";
                     header("Location: view.php");
                    
  
exit; 
                }
    
    else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
        include_once("login.php");
                }
    }

   }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
    
    
  return $data;
}
        
?>
   


<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <input type="hidden" name="new" value="1" />
  Enter Name : <input type="text" name="name" readonly  value="<?php echo $row['name'];?>">
  <br><br>
   Enter Mail id: <input type="text" name="email" required  value="<?php echo $row['email'];?>">
  <br><br>
    Enter first value:<input type="number" name="firstmark" required  value="<?php echo $row['firstmark'];?>">
    <br><br>
     Enter second value:<input type="number" name="secondmark" required  value="<?php echo $row['secondmark'];?>">
    <br><br>
     Enter third value:<input type="number" name="thirdmark" required value="<?php echo $row['thirdmark'];?>">
    <br><br>
     Enter fourth value:<input type="number" name="fourthmark" required  value="<?php echo $row['fourthmark'];?>">
    <br><br>
     Enter fifth value:<input type="number" name="fifthmark" required  value="<?php echo $row['fifthmark'];?>">
    <br><br>

  <input type="submit" name="update" value="update">  
</form>
</body>
</html>