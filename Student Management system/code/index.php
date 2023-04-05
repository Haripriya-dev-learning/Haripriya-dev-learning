<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
     include_once("menu.php");
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
    /*switch ($calculation) {
  case "total":
    
    break;
 // case "sub":
   //  $total = $gender - $website;echo "<br>";
   // break;
 // case "multiply":
    // $total = $gender * $website;echo "<br>";
    //break;
 case "average":
  $average = $total/5;echo "<br>";
  break;
  default: */
   

    include_once("db-config.php");
    $result   = mysqli_query($mysqli, "INSERT INTO students_marks(name,email,firstmark,secondmark,thirdmark,fourthmark,fifthmark,total,average) VALUES('$name','$email','$firstmark','$secondmark','$thirdmark','$fourthmark','$fifthmark','$total','$average')");
                // check if user data inserted successfully.
                if ($result){
                    echo "<br/><br/>Marks inserted successfully.";
                     header("Location:view.php");
                } 
    else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
    }
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
    
    
  return $data;
}
?>

<h2>Student Mark Registeration </h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">  
  Enter Name : <input type="text" name="name" required>
  <br><br>
   Enter Mail id: <input type="text" name="email" required>
  <br><br>
    Enter first value:<input type="number" name="firstmark" required>
    <br><br>
     Enter second value:<input type="number" name="secondmark" required>
    <br><br>
     Enter third value:<input type="number" name="thirdmark" required>
    <br><br>
     Enter fourth value:<input type="number" name="fourthmark" required>
    <br><br>
     Enter fifth value:<input type="number" name="fifthmark" required>
    <br><br>
  <input type="submit" name="submit" value="Submit">
    
</form>
</body>
</html>