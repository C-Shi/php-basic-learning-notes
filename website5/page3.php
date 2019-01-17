<?php
  $user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];

  // user serialize() and unserialize() to convert array into string so you can save in as cookie
  $user = serialize($user);
  setcookie('user', $user, time() + (86500 * 5));

  $user = unserialize($_COOKIE['user']);

  echo $user['name'];
 ?>