<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"])) {
   session_start();
    
    $username =$_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
     
    include_once("db-config.php");

     $result = mysqli_query($mysqli, "select 'username', 'password' from users
        where username='$username' and email='$email' ");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

         echo "User email or password is already exisit <br/><br/>";
    } else {
       
   
    
    $result1   = mysqli_query($mysqli, "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
                
                if ($result1){
                    echo "<br/><br/>Singup success.";
                     header("Location:login.php");
                } 
    else {
                    echo "Registration error. Please try again." . mysqli_error($mysqli);
                }
    }
     }

//    // Count the number of user/rows returned by query 
//    $user_matched = mysqli_num_rows($result);
//
//    // Check If user matched/exist, store user email in session and redirect to sample page-1
//    if ($user_matched > 0) {
//
//        $_SESSION["email"] = $email;
//        header("location: view.php");
//    } else {
//        echo "User email or password is not matched <br/><br/>";
//    }
//
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
<div class="container">
          <div class="imgcontainer">
    <img src="loginpic.jpeg" alt="loginpic" class="loginpic">
  </div>
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>UserName</b></label>
    <input type="text" placeholder="Enter UserName" name="username" id="username" required>
<label for="email"><b>Email-ID </b></label>
    <input type="text" placeholder="Enter Email id " name="email" id="email" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    
    <hr>

    <button type="submit" name="submit" class="registerbtn">signup</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
