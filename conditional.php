<?php

  /*
    == vs ===, same as javascript

  */

  $num = 5;

  if ($num === 5){
    echo '$num equals to 5';
  } else if ($num === 6) {
    echo '$num equals to 6';
  } else {
    echo 'did not pass any';
  }

  echo "<br>";
  // Nesting if

  $num = 5;

  if ($num > 4){
    if($num < 10){
      echo '$num is between 5 and 10';
    }
  }
  echo '<br>';

  // logical operator
  /*
    AND &&
    OR  ||
    XOR  one has to be true but not both
  */

  if ($num > 4 AND $num < 10){
    echo "$num passed";
  }

  echo '<br>';
  // SWITCH

  $favColor = 'black';

  switch($favColor){
    case 'red':
      echo 'favorite color is red <br>';
      break;
    case 'blue':
      echo 'favorite color is blue <br>';
      break;
    case 'green':
      echo 'favorite color is green <br>';
      break;
    default:
      echo 'unrecognized color';
  }


 ?>