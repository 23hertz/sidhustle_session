<?php
session_start();

if(isset($_POST['login'])){

    $username = "Adeolu";
    $pwd = "123456";

   if($_POST['username'] == $username && $_POST['pwd'] == $pwd){
       $_SESSION['username'] = $username;
       header('location:mainpage.php');
   }
   else{
       $err = "Authentication failed try again";
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
    <?php
    if(isset($err)){
        echo $err;
    }
    ?>
         <div class="headings">
         <h1>Login Page</h1>
         </div>

         <form action="" method="post">
         <div class="form_block">
         <label>Username</label>
              <input type="text" name="username"  class="form_input">
         </div>
         <div class="form_block">
         <label>Password</label>
              <input type="text" name="pwd" class="form_input">
         </div>

         <div class="form_block">
              <input type="submit" value="login" name="login">
         </div>
        </form>
       
    </div>
</body>
</html>
