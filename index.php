<?php
session_start();

if(isset($_POST['login'])){
    $name = $_POST['username'];
    $pword = $_POST['pwd'];

    if($_SESSION['username'] === $name && $_SESSION['pwd'] === $pword ){
        header('location:mainpage.php');
    } 
    else{
        $err = "* You are not a registered Member Or Incorrect Username or Password";
       
    }
}
  

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error{
            color:red;
            text-align:center;
            display:block;
            
        }
    </style>
</head>
<body>
    
    <div class="container">
   
    <div class="error">
       
         <?php
            if(isset($err)){
                echo $err;
            }
          ?>
          </div>

         <div class="headings">
         <h1>Login Page</h1>
         </div>

        
        
         <form action="" method="post">
         <div class="form_block">
         <label>Username</label>
              <input type="text" name="username"  class="form_input" required>
         </div>
         <div class="form_block">
         <label>Password</label>
              <input type="text" name="pwd" class="form_input" required> 
         </div>

         <div class="form_block">
              <input type="submit" value="login" name="login">
         </div>
        </form>
        Register Here <a href="register.php">Register</a>
       
    </div>
</body>
</html>