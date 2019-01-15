<?php
  # Array - Variables that holds multiple values;
  /*
    - Index
    - Associative
    - Multi-dimensional
  */

  // $people = array('Kevin', 'Jermey', 'Sara');
  $number = array(1,3,5,7);
  $cars = ['Honda', 'Toyota', 'Ford'];
  // add to end of array, use empty braket
  $cars[] = 'BMW';
  // echo $people[1];
  echo $number[2];
  echo $cars[3];

  // use count to get length
  echo count($cars);
  // use print_r to print the entire array
  print_r($cars);

  // var_dump is a method to get the type of data
  // use for debug
  var_dump($cars);

  echo '<br>';

  # Associative array;
  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
  echo $people['Brad'];

  $cars = array(
      array('Honda', 20, 10),
      array('Toyota', 30, 20),
      array('Ford', 23, 12)
  );

  echo '<br><br>';

  echo $cars[0][0];

 ?>