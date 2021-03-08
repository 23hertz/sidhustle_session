<?php
session_start();

if(isset($_POST['register'])){

    
        $username = $_POST['username'] ;
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];
    
         $_SESSION['username'] = $username;
         $_SESSION['email'] = $email;
         $_SESSION['pwd'] = $pwd;
     
         header('location:index.php');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <div class="container">
   
         <div class="headings">
         <h1>Registration Page</h1>
         </div>

         <form action="" method="post">
         <div class="form_block">
         <label>Username</label>
              <input type="text" name="username"  class="form_input" required>
         </div>

         <div class="form_block">
         <label>Email</label>
              <input type="email" name="email"  class="form_input" required>
         </div>
     
         <div class="form_block">
         <label>Password</label>
              <input type="text" name="pwd" class="form_input" required> 
         </div>

         <div class="form_block">
              <input type="submit" value="register" name="register">
         </div>
        </form>
       
    </div>
</body>
</html>