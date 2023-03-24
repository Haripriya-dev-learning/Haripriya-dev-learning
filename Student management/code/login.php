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
if (isset($_POST['login'])) {
    $email    = $_POST['txt_uname'];
    $password = $_POST['password'];

    // Check if a user exists with given username & password
    $result = mysqli_query($mysqli, "select 'username', 'password' from users
        where username='$email' and password='$password'");

    // Count the number of user/rows returned by query 
    $user_matched = mysqli_num_rows($result);

    // Check If user matched/exist, store user email in session and redirect to sample page-1
    if ($user_matched > 0) {

        $_SESSION["email"] = $email;
        header("location: view.php");
    } else {
        echo "User email or password is not matched <br/><br/>";
    }
}
?>
<html>
   
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 10%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
    <body>
    <div class="container">
          <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
    <form action="login.php" method="post" name="login">
        <div id="div_login">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" required />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_password" name="password" placeholder="Password" required/>
            </div>
           
            <div>
                <button type="submit" name="login" id="login" >Login</button>
            </div>
            
    
        </div>
    </form>
</div>
        
        <div id="div_login">
  <form method="POST" action="signup_page.php">
      <button type="submit" name="login" id="login" >Signup</button>
    
  </form>
</div>
    </body>
</html>

