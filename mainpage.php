
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
    <style>
        center{
            font-size:30px;
        }
    </style>
</head>
<body>
<div class="container">
   
<center>
<?php
session_start();

if(!isset($_SESSION['username']))
{
    header('location:index.php');
}
    echo "Welcome "."<b>".$_SESSION['username']."</b>"."</br>";

    echo "Your password is ". "<h1>".$_SESSION['pwd']."</h1>";

    echo "Your email is ". "<h1>".$_SESSION['email']."</h1>";



?>

</center>
  
 
</div>
   <a href="logout.php">LogOut</a>
</body>
</html>, 