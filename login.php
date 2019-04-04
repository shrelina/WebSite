<?php
session_start();
 ?>
<?php
include 'header.php' ;
?>
<html>
<head>
  <link rel="stylesheet" href= "login.css">
</head>

<body id ="body-color">

<Center>
<h1> Login Page</h1>
<form method="post" action= "handler.php">
  <div><label for="Email">E-mail:</label>
  <input type="text" placeholder="Enter an Email" name="Email"></div>

  <?php
  if(isset($_SESSION['email_doesnot'])){
    echo "<div id ='allErrors'>" . $_SESSION['email_doesnot'] . "</div>";
  }

  unset($_SESSION['email_doesnot']);
  if(isset($_SESSION['email_Err'])){
    echo "<div id ='allErrors'>" . $_SESSION['email_Err'] . "</div>";

  }
  unset($_SESSION['email_Err']);

   ?>
   <div><label for="password">Password:</label>
   <input type="password" placeholder="Enter a password" name="password"></div>

   <?php
   if(isset($_SESSION['password_Err'])){
     echo "<div id ='allErrors'>" . $_SESSION['password_Err'] . "</div>";
   }

   unset($_SESSION['password_Err']);
   unset($_SESSION['formInput']);
   ?>


<input id="button" type="submit" name="submit" value="Login"></td>

</form>
<form method ="post" action = "signup.php">
<input id="button" type="submit" name="submit" value="Sign-Up">
</form>
</Center>


<?php
include 'footer.php';
?>

</body>
</html>
