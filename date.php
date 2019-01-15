<?php
  /*
    in case of date formatting, upper case is Letter, or full
    lower case is number

    eg: y - 19, Y - 2019
        m - 01, M - Jan

  */

  echo date('d'); // Day
  echo '<br>';
  echo date('m'); // Month
  echo '<br>';
  echo date('y'); // Year
  echo '<br>';
  echo date('l'); // Day of week
  echo '<br>';
  echo date('m-d-y');

  echo '<br><br>';

  // date() function also work with time

  // date() can take second argument passing a timestamp
  echo date('h'); // Hour
  echo '<br>';
  echo date('i'); // Minute
  echo '<br>';
  echo date('s'); // Second
  echo '<br>';
  echo date('a'); // AM or PM
  echo '<br>';

  // Set Time Zone
  date_default_timezone_set('Canada/Mountain');
  echo date('h:i:sa');
  echo '<br>';

  echo strtotime("tomorrow");
  echo '<br>';
  echo date('m/d/y', strtotime('+10 days'));

 ?>

