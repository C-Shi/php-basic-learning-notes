<?php

  if(isset($_POST['username'])){
    $username = htmlentities($_POST['username']);

    // setcookie(name, value, expire);
    setcookie('username', $username, time() + 3600);

    header('Location: page2.php');

  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP Sessions</title>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Enter a name">
    <br>
    <input type="submit" name="submit">

  </form>

</body>
</html>