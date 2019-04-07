<?php
session_start();

?>

<?php
include 'header.php'
?>

<html>
<head>
<link rel="stylesheet" href="signup.css">
</head>

<body>
<Center>
<h1>Sign-Up Page</h1>

<form method="post" action="signuphandler.php">

<div><label for="email">E-mail:</label>
<input type="text" placeholder="Enter Email" name="email"
value ="<?php echo isset($_SESSION['formInput']) ? $_SESSION['formInput']['email'] : ''; ?>"
</div>
<br>

<?php
if(isset($_SESSION['email_Err'])){

  echo "<div id='allErrors'>" . $_SESSION['email_Err'] . "</div>";

}
unset($_SESSION['email_Err']);
?>


<br> <div><label for="username">Username:</label>
<input type="text" placeholder="Enter Username" name="Username"></div>

<br>  <div><label for="password">Password:</label>
<input type="password" placeholder="Enter password" name="password"></div>

<?php

if(isset($_SESSION['password_Err'])){
 echo "<div id ='allErrors'>" . $_SESSION['password_Err'] . "</div>";

}
unset($_SESSION['password_Err']);
?>

<br>  <div><label for="repassword">Retype Password:</label>
<input type="password" placeholder="Confirm Password" name="repassword"></div>
<br>

<?php
if(isset($_SESSION['repassword_Err'])){
  echo "<div id ='allErrors'>" . $_SESSION['repassword_Err'] . "</div>";

}
unset($_SESSION['repassword_Err']);
?>

Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other

<br><br>
<div>

<input id="button" type="submit" name="submit" value="Sign-Up">
</div>
<?php
if(isset($_SESSION['message'])){
  echo "<div id ='allErrors'>" . $_SESSION['message'] . "</div>";

}
unset($_SESSION['message']);
unset($_SESSION['valid']);
unset($_SESSION['formInput']);

?>
</form>
</Center>

<?php
include 'footer.php';
?>
</body>
</html>
