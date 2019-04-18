<?php
include 'header.php';
?>
<html>

<head><title> HomePage</head></title>

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
</p>


</body>

<?php
include 'footer.php';
?>
