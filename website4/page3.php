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
  <h1>Hello <?php echo $name; ?>, <?php echo $email; ?></h1>
</body>
</html>