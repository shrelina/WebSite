
<html>

<title> ShrelinaCloset </title>
<link rel = "stylesheet" href="style.css">
<link rel = "shortcut icon" type="image/x-icon" href="/favicon.ico"/>
</head>
<div class = "header">
<Center><img src ="logo.png" atl ="logo" width="80" height="80" /></Center>

<h1>
<Center> Shrelina Closet </Center>
</h1>

<Strong>
<h2>
<Center>
<a class ="active" href="homepage.php"> home </a>
&nbsp;
<a class ="active" href="women.php"> women </a>
&nbsp;
<a class ="active" href="men.php"> men </a>
&nbsp;
<a class ="active" href="cart.php"> cart </a>
&nbsp;



<?php echo $_SESSION['userId']; ?>

<a href="login.php"> login </a><br><br>
</nav>
<form action ="search.php" method ="GET">
<div class ="search">
<input type="text" name= "query" placeholder="Search">
<input type ="submit" value ="go"/>
</form>
</h2>
</div>
</Center>

</Strong>
</div>

<strong><hr /></strong>
</html>
