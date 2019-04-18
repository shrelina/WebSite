<?php
session_start();

$_SESSION['loggedIn']=false;
unset ($_SESSION['userId']);
session_destroy();
header('Location: login.php');
exit;
 ?>
