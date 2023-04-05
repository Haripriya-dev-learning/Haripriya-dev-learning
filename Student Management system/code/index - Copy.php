<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
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

 $calculation = test_input($_POST["calculation"]); 
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
                if ($result) {
                    echo "<br/><br/>Marks inserted successfully.";
                     include_once("view.php");
                } else {
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

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
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
<label for=operations>Choose a operation:</label>

<select name="calculation" id="calculation">
  <option value="total">total</option>
  <option value="sub">Sub</option>
  <option value="multiply">Mulitiply</option>
  <option value="average">average</option>
</select>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
    

    echo "<h2> operation:</h2>" . $calculation;
    echo "<br>";
echo "<h2>Your Input:</h2>";
echo "1st Value :" . $firstmark;
echo "<br>";
echo "2nd Value :". $secondmark;
echo "<br>";
echo "3rd Value :". $thirdmark;
echo "<br>";
echo "4th Value :". $fourthmark;
echo "<br>";
echo "5th Value :". $fifthmark;
echo "<br>";
    echo "Total :: ";
    echo $total;
    echo "Average ::";
    echo $average;
    
   

?>
      <form method="POST" action="view.php">
   <button>view your scroe</button>
</a>
     
  


</body>
</html>