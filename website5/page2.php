<?php
  setcookie('username', 'Frank', time() + (86400 * 30));

  // Delete cookie
  // setcookie('username', 'Frank', time() - 1);

  if (count($_COOKIE) > 0){
    echo 'There are ' . count($_COOKIE) . ' cookies';
  } else {
    echo 'There is no cookie saved';
  }

  echo '<br>';

  // no something like session_start b/c cookie in the browser
  if(isset($_COOKIE['username'])){
    echo 'Cookie set as ' . $_COOKIE['username'];
  } else {
    echo "No cookie";
  }

 ?>