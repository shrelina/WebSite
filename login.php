<?php
session_start();
 ?>
<html>
<head>
  <link rel="stylesheet" href= "login.css">
</head>

<Center><img src ="logo.png" atl ="logo" width="80" height="80" /></Center>
<h1>
<Center> Shrelina Closet </Center>
</h1>
<body id ="body-color">

<Center>
<h2> Login Page</h2>
<body id ="body-color">

<Center>
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
