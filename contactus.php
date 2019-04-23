<?php

session_start();
if (isset($_SESSION['access']) && !$_SESSION['access'] ||
		!isset($_SESSION['access'])){
		require_once("header.php");
		} else {
		require_once("LoginHeader.php");

		}
		?>
<head>
<title> Contact Us </title>
<link rel="stylesheet" href= "contactus.css">
</head>
<body background ="call.png">
<b>
<p>
<p>1-800-000-1111</p>
<p>10am-5pm PT</p>
<p>7 days a week</p>
<a href="comment.php">Leave feedbacks!</a>
</b>
</body>

<strong><hr /></strong>

<?php
include 'footer.php';
?>
</html>
