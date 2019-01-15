<?php
  # Loop
  /*
    For
    While
    Do...while
    Foreach
  */

  for ($i = 0; $i < 10; $i++){
    echo $i;
    echo '<br>';
  }

  echo "<br><br>";
  $i = 0;

  while ($i < 10) {
    echo $i;
    echo "<br>";
    $i++;
  }

  echo "<br><br>";
  $i = 0;
  do {
    echo $i;
    echo "<br>";
    $i++;
  } while($i < 10);


  echo "<br><br>";
  $people = array('Brad', 'Jose', 'William');

  foreach($people as $person){
    echo $person;
    echo '<br>';
  }

  $people = array(
    'Brad' => 'brad@gmail.com',
    'Jose' => 'jose@gmail.com',
    'William' => 'william@gmail.com',
  );

  echo "<br><br>";

  foreach($people as $person => $email){
    echo "$person : $email";
    echo "<br>";
  }




 ?>