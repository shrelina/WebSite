<?php
session_start();
?>
<?php
include 'header.php';
 ?>

<html>
  <head>
    <link rel="stylesheet" href="comments.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="js/comments.js"></script>
    <script src="js/ajax.js"></script>
  </head>
  <body>
    <Center>
    <h1>Feedbacks</h1>
    <form id="form">
      <div>Your Feedback: <input type="text" id="comment" name="comment"></div>
      <br><div><input type="submit" value="Submit"></div>
      <?php
      if (isset($_SESSION['message'])) {
        $sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "good" : "bad";
        echo "<div class='" . $sentiment . "' id='message'>" . $_SESSION['message'] . "<span class='close'>X</span></div>";
      }
      unset($_SESSION['message']);
      ?>
    </Center>

    </form>

   <?php
   require_once 'Dao.php';
   $dao = new Dao();
   $comments = $dao->getComments();
   echo "<table id='comments'>";
   foreach ($comments as $comment) {
     echo "<tr><td>" . htmlspecialchars($comment['comment']) . "</td><td>{$comment['date_created']}</td></tr>";
   }
   echo "</table>";
   ?>
  </body>
</html>
<?php
include 'footer.php';
 ?>
