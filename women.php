


<?php

session_start();
if (isset($_SESSION['access']) && !$_SESSION['access'] ||
    !isset($_SESSION['access'])){
    header("Location:login.php");
  }
?>


<?php

session_start();
if (isset($_SESSION['access']) && !$_SESSION['access'] ||
		!isset($_SESSION['access'])){
		require_once("header.php");
		} else {
		require_once("LoginHeader.php");

		}
		?>

<link rel="stylesheet" href= "women.css">

<body>
<a href="women.php">
<Center>
<div class="item">

<img src ="pant.png" alt="pant"/>
<span class="caption"> High-Waist Pant <br> Price: $100</span>
<a href="incasecart.php">Add To Cart</a>
<br>
<img src ="blazer.png" alt="Blazer" width ="250" height="400"/>
<span class="caption"> Blazer <br> Price: $80</span>
<a href="incasecart.php">Add To Cart</a>
<br>
<img src ="polcadot.png" alt="Polcadots" width ="250" height="400"/>
<span class="caption"> Polcadots <br> Price: $80</span>
<a href="incasecart.php">Add To Cart</a>


</div>
</Center>
</a>
</body>

<?php
include 'footer.php';
?>
