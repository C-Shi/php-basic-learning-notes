<?php
  // single line comment
  # single line comment
  /*
    multiline comment
  */
  print 'Print will return';
  echo 'Echo does not return any value';

  # Variable
  /*
    - Prefix with $
    - Start with a letter or an underscore
    - Only letters, numbers and underscore, case sensitive
  */

  # Data type
  /*
    String
    Integers
    Floats
    Booleans
    Arrays
    Objects
    Null
    Resource
  */
  $output = 'Hello world';
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;
  $float1 = 4.4;
  $bool1 = true;

  $str1 = "hello";
  $str2 = "world";

  // in php, string concat use .
  $greeting = $str1 . $str2;

  // double quote will parse variable
  $greeting2 = "$str1 $str2";

  // constant use define function, name shall use upper case

  define("NAME", "John");
  echo NAME;
 ?>