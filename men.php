
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

<link rel="stylesheet" href= "men.css">


<body>
<a href="men.php">
<Center>
<div class="item">

<img src ="shirt.png" alt="shirt"/></br>
<br><span class="caption"> Shirt <br> Price: $100</span>
<br><a href="incasecart.php">Add To Cart</a>
<br>
<img src ="scarf.png" alt="scarf"/>
<br><span class="caption"> Scarf <br>Price: $100</span>
<br><a href="incasecart.php">Add To Cart</a>
<br>
<img src ="menpant.png" alt="Pant "300" height="400""/>
<br><span class="caption"> Pant <br> Price: $100</span>
<br><a href="incasecart.php">Add To Cart</a>
</div>
</Center>
</a>
</body>

<?php
require_once('footer.php');
?>
