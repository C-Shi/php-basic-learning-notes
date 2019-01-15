<?php
if(($_GET['name'])){

  // htmlentities(string) to prevent cross site scripting
  echo htmlentities($_GET['name']);
}

if(($_POST['name'])){

  // htmlentities(string) to prevent cross site scripting
  echo htmlentities($_POST['name']);
}

echo $_SERVER['QUERY_STRING'];

?>

<!-- for submittion always make sure to prevent cross site scripting -->
<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
</head>
<body>
  <form method="GET" action=<?php $_SEVER['PHP_SELF'] ?>>
    <div>
      <label>Name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label>
      <input type="email" name="email">
    </div>
    <input type="submit" value="submit">
  </form>

  <br><br>

  <form method="POST" action=<?php $_SEVER['PHP_SELF'] ?>>
    <div>
      <label>Name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label>
      <input type="email" name="email">
    </div>
    <input type="submit" value="submit">
  </form>

</body>
</html>