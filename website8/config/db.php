<?php
  // create connection
  // use 127.0.0.1 instead of localhost
  $conn = mysqli_connect('127.0.0.1', 'root', '', 'php_test');

  // check connection
  if(mysqli_connect_errno()){
    // connection failed;
    echo 'Failed to connect to MySQL' . mysqli_connect_errno() . '<br>';
  }
 ?>