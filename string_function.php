<?php
  # substr(string, start index, end index) - return a portion of string

  $output = substr('Hello', 1, 3);
  echo $output;
  echo '<br>';

  # strlen()
  # Returns the length of a string

  $output = strlen('Hello World');
  echo $output;
  echo '<br>';

  # strpos() - find the position of first matching
  $output = strpos('Hello World', 'o');
  echo $output;
  echo '<br>';

  # strrpos() - find the last matching
  $output = strrpos('Hello World', 'o');
  echo $output;
  echo '<br>';

  # trim() - strips whitespace
  $text = 'Hello World        ';
  var_dump($text);
  $trimmed = trim($text);
  var_dump($trimmed);
  echo '<br>';

  # strtoupper and strtolower() and ucwords()
  echo strtoupper('Hello World');
  echo '<br>';
  echo strtolower('Hello World');
  echo '<br>';
  echo ucwords('hello world');
  echo '<br>';

  # str_replace(search, replacement, subject)
  $text = 'Hello World';
  $output = str_replace('World', 'Everyone', $text);
  echo $output;
  echo '<br>';

  # is_string() check if string
  # this return 1 if true, return nothing if false

  $val = 'Hello';
  echo is_string($val);
  echo '<br>';

  $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', '    ', 0, '0');

  foreach($values as $value){
    if (is_string($value)){
      echo "$value is a string";
      echo '<br>';
    }
  }
  echo '<br>';


# gzcompress() - compress string
  $string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

  $compressed = gzcompress($string);
  echo $compressed;
  echo '<br>';
  $original = gzuncompress($compressed);
  echo $original;
  echo '<br>';
 ?>










