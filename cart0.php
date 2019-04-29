
<?php

session_start();
if (isset($_SESSION['access']) && !$_SESSION['access'] ||
		!isset($_SESSION['access'])){
		require_once("header.php");
		} else {
		require_once("LoginHeader.php");

		}
		?>
<link rel="stylesheet" href= "cart.css">


<body>
<b><strong>
<p align="center">
  <img src ="empty.png" alt="empty" width= "150" height="150"/>
  <br><br>
Your Cart Is Empty!
<a href="homepage.php">Continue Shopping!</a>


</p></strong>
</body>

<?php
include 'footer.php';
?>
