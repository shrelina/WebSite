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
<body>
<Center>
<h1>Search Results</h1>
<img src ="s.png" alt="search" width= "150" height="150"/><b>
<br>The results did not match any documents.</b>
<h3>Suggestions:</h3>
<ul>
<li>Make sure all words are spelled correctly.</li>
<li>Try different keywords.</li>
</ul>
</Center>
</body>

<?php
include 'footer.php';
?>
