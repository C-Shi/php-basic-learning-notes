<?php
  $loggedIn = false;

  // if ($loggedIn){
  //   echo 'You are logged in';
  // } else {
  //   echo 'You are NOT logged in';
  // }

  echo ($loggedIn) ? "You are logged in" : "You are not logged in ";
  echo '<br>';

  $isRegistered = ($loggedIn == true) ?  true : false;
  echo $isRegistered;

  $age = 20;
  $score = 15;

  echo 'Your score is ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional'): ($age > 10 ? 'Horiable' : 'Average'));

  echo '<br>';

 ?>


 <div>
  <?php if($loggedIn){ ?>
    <h1>Welcome User</h1>
  <?php }else{ ?>
    <h1>Welcome Guest</h1>
  <?php } ?>

  <?php if($loggedIn): ?>
    <h1>Welcome User</h1>
  <?php else: ?>
    <h1>Welcome Guest</h1>
  <?php endif; ?>
 </div>