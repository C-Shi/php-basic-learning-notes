<?php
  session_start();

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <h5>Thank you <?php echo $name; ?> from <?php echo $email ?></h5>
  <a href="page3.php">Go to page3</a>
</body>
</html>