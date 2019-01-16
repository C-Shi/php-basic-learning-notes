<?php
  // message alert
  $msg = "";
  $msgClass = "";

  // Check for submit
  if(filter_has_var(INPUT_POST, 'submit')){
    // Get Form Data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // use empty() to check if it is empty
    if (!empty($email) && !empty($name) && !empty($message)){
      // passed
      // validated email
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          // Passed
        echo 'passed';
      } else {
        // failed
        $msg = 'Please use valid email';
        $msgClass = 'alert-danger';
      }
    } else {
      // failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Contact Use</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <?php if($msg != ""): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form method='POST' action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo ($name) ? $name : ""?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message" class="form-control"></textarea>
      </div>
      <br>
      <button class="btn btn-success" name="submit">Submit</button>
    </form>
  </div>

</body>
</html>