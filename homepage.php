
<html>
<head>

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
		<title> HomePage</title></head>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#flip").click(function(){
					$("#panel").slideToggle("slow");
					});
			});
		</script>
		<style>
#panel, #flip {
		padding: 5px;
		text-align: center;
color: white;
       background-color: black;
border: solid 1px #c3c3c3;
}

#panel {
padding: 50px;
display: none;
}
</style>


<body>
<b>
<div id="flip">Click To View Todays's Deal</div></b>
<div id="panel"><img src ="sale.png" alt="sale"/></div>

<div class ="marquee">
<marquee behavior="scroll" direction="right">
<font-size:30px;><strong>Trending Now!</strong>
</marquee>
</div>
<p align="center">


<img src ="dress.jpg" alt="dresscode"width="80%" height="80%"/>
<img src ="st.png" alt="s"width="80%" height="100%"/></div>

</p>
<?php
require_once('footer.php');
?>

</body>
</html>
