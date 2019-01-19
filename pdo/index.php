<?php
  $host = '127.0.0.1';
  $user = 'root';
  $password = '';
  $dbname = 'php_test';

  // Set DSN
  $dsn = "mysql:host=$host;dbname=$dbname";

  // Create a PDO instance
  $pdo = new PDO($dsn, $user, $password);
  // set default of fetching method
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


  # PDO QUERY
  $stmt = $pdo->query('SELECT * FROM posts');

  // when fetch, need to tell pdo what format to fetch unless you set the default
  while($row = $stmt->fetch()){
    echo $row['title'] . '<br>';
  }

  echo '<br><br><br>';

  # PREPARED STATMENTS (prepare & execute)
  // Unsafe way
  // $sql = "SELECT * FROM posts  WHERE author = '$author'";

  // FETCH MULTIPLE POSTS
  // Positional Params

  /*
    pass a query with ? placeholder, and execute with variable
  */
  $author = 'John';
  $sql = 'SELECT * FROM posts WHERE author = ?';
  $stmt = $pdo->prepare($sql);
  // when execute, need to pass array corresponding to the placeholder
  $stmt->execute([$author]);
  // after execute need to fetch result
  $results = $stmt->fetchAll();
  foreach($results as $result) {
    echo $result['title'] . ' - ' . $result['author'] . ' - ' . $result['body'] . '<br>';
  }

  // Named Params
  /*
    pass a query with assigned name as place holder

  */

  $author = 'Kevin';
  // assigned placeholder name should be a hash format
  $sql = 'SELECT * FROM posts WHERE author = :author';
  $stmt = $pdo->prepare($sql);
  // when execute, need to pass associated array
  $stmt->execute(['author' => $author]);
  // after execute need to fetch result
  $results = $stmt->fetchAll();
  foreach($results as $result) {
    echo $result['title'] . ' - ' . $result['author'] . ' - ' . $result['body'] . '<br>';
  }

 ?>