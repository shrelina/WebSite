<?php

session_start();
if (isset($_SESSION['access']) && !$_SESSION['access'] ||
		!isset($_SESSION['access'])){
		require_once("header.php");
		} else {
		require_once("LoginHeader.php");

		}
		?>
    
<head><title>aboutus</title>
	<link rel="stylesheet" href="aboutus.css">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").hide();
  });
});
</script>

</head>

<body background ="environment.png">

<h3>WE LEAD, WE ARE THE PROFESSIONAL.</h3>
<b>
	<h4>
At shrelinacloset, we see a world where
everybody wants to dress up as a professional
in the job environment.Whether in the university
or in the official job, we deliver the highest
quality attires you like.Everyday we are demanding
a better future for ourselves, our communities and
the companies employees. We believethat protecting
a planet where all employees in company can wear
this outfit. And we beleive every men and women should
 have access to job.
</h4>
<p>
	Welcome to [ShrelinaCloset], your number one source for all things [product, ie: shoes, bags, dog treats]. We're dedicated to giving you the very best of [product], with a focus on [three characteristics, ie: dependability, customer service and uniqueness.]
Founded in [year] by [founder's name], [store name] has come a long way from its beginnings in a [starting location, ie: home office, toolshed, Houston, TX.]. When [store founder] first started out, his/her passion for [passion of founder, ie: helping other parents be more eco-friendly, providing the best equipment for his fellow musicians] drove him to [action, ie: do intense research, quit her day job], and gave him the impetus to turn hard work and inspiration into to a booming online store. We now serve customers all over [place, ie: the US, the world, the Austin area], and are thrilled to be a part of the [adjective, ie: quirky, eco-friendly, fair trade] wing of the [industry type, ie: fashion, baked goods, watches] industry.

We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
</p>
<Center>
<button>Click me to hide paragraphs</button>
</Center>
</b>
</body>

<?php
include 'footer.php';
 ?>
