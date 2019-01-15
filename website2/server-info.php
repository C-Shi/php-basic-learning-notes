<?php
  # $_SERVER superglobals - built-in variable available in all scope

  // Create Server Array
  $server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    // Document root is very commonly used
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    // $_SERVER['PHP_SELF'] is used for sumbittimg form to current page itself
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
  ];

  // print_r($server);
  // echo '<br><br>';

  // Create Client Array
  $client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
  ];

  //  print_r will print the entire array
  // print_r($client);

 ?>