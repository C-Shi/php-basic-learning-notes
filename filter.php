<?php

  // filter_has_var is a built in function to check if there is any post/get data
  // filter_has_var ( int $type , string $variable_name ) : bool
  if(filter_has_var(INPUT_POST, 'data')){
    echo 'Data found';
  } else {
    echo 'No data';
  }

  echo '<br>';

  if (filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email. '<br>';


    // filter_input will filter any type of data,
    // filter_input($type, $variable_name, $filter_function) --> check manual
    if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
      echo 'Email is valid';
    } else {
      echo 'Email is not valid';
    }
  }

  echo '<br>';

  $var = '33kasjdhf3sf5sdkjf3';
  var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

  $code = '<script>alert(1)</script>';

  // can use filter_var with sanitize function to prevent cross site scripting
  echo filter_var($code, FILTER_SANITIZE_SPECIAL_CHARS);
  echo '<br>';

  $filters = array(
    'data' => FILTER_VALIDATE_EMAIL,
    'data2' => array(
      'filter' => FILTER_VALIDATE_INT,
      'options' => array(
        'min_range' => 1,
        'max_range' => 100,
      )
    )
  );

  print_r(filter_input_array(INPUT_POST, $filters));
  echo '<br><br>';

  $arr = array(
    'name' => 'test',
    'age' => '45',
    'email' => 'test@gmail.com'
  );

  $filters2 = array(
    "name" => array(
      "filter" => FILTER_CALLBACK,
      "options" => "ucwords"
    ),
    "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 120
      )
    ),
    "email" => FILTER_VALIDATE_EMAIL
  );

  print_r(filter_var_array($arr, $filters2));
 ?>


<!-- Using superglobals so changing file name does not affect-->
<form method='POST' action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <input type='text' name='data'>
  <input type='text' name='data2'>
  <button>Submit</button>
</form>







