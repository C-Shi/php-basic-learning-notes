<?php
  # function is a block of code can be repeatedly called

  /*
    three type of function naming
    Camel case - myFunction()
    Snake case - my_function()
    Pascal case - MyFunction()
  */

  function simpleFunction(){
    echo "Hello World";
  }

  simpleFunction();

  echo "<br>";

  // in php, function with param will need a $ sign
  function sayHello($name = 'World'){
    echo "Hello, $name<br>";
  }

  sayHello('Joe');
  sayHello('Jason');
  sayHello();

  // Return Value
  function addNumbers($num1, $num2){
    return $num1 + $num2;
  }

  echo addNumbers(2,3);

  echo "<br>";

  $myNum = 10;

  function addFive($num){
    $num += 5;
  }

  // & is passing by reference, which is passing the variable itself instead of a copy
  function addTen(&$num){
    $num+= 10;
  }

  addFive($myNum);

  echo "Value: $myNum<br>";

  addTen($myNum);

  echo "Value: $myNum<br>";
 ?>