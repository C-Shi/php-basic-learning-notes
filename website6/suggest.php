<?php
  $people = array(
    "Steve", "John", "Kathy", "Evan",
    "Anthony", "Tom", "Rhonda", "Hal",
    "Ernie", "Johanna",
  );

  // Get Query String
  $q = $_REQUEST['q'];
  $suggestion = "";

  // Get suggestion

  if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
      if(stristr($q, substr($person, 0, $len))){
        if ($suggestion === "") {
          $suggestion = $person;
        } else {
          $suggestion .= ", $person";
        }
      }
    }
  }

  echo ($suggestion == "") ? "no suggestion" : $suggestion;
 ?>