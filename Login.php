<?php
session_start();
if(isset($_SEESION['username'])){
	header("location:Home.php");
}else{
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | CodingLab</title>
    <link rel="stylesheet" href="style1.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <style>

  </style>
  <body>
 
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="Login.php" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Email or Phone" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Log In" name="loginButton">
          </div>
          <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        </form>
      </div>
    </div>

   

  </body>
</html>
<?php

$username='';
$password='';

if(isset($_POST['loginButton'])){
  if(empty($_POST['username']) || empty($_POST['password'])){
    echo "All fields are required!";
  }else{
    $username=$_POST['username'];
    $password=$_POST['password'];
  
    if($username == 'Zeqir' && $password == 'Thaqi'){
      session_start();
      $_SESSION['username']=$username;
      $_SESSION['password']=$password;
  
      header('location:Index.php');
  }else{
  
    echo 'This User Does Not Exist!';
  
  }
  }
  }
?>
