<?php
  $path = '/dir1/myfile.php';
  $file = 'file1.txt';

  // function basename will return the file name
  echo basename($path);
  echo '<br>';


  // return filename without extension - need file type
  echo basename($path, '.php');
  echo '<br>';

  // return the directory name from path
  echo dirname($path);
  echo '<br>';

  echo file_exists($file);
  echo '<br>';

  // Get absolute path
  echo realpath($file);

  // Checks to see if file
  echo '<br>';
  echo is_file($file);
  echo '<br>';

  /*
    Different between file_exists and is_file
    file_exists() will check folder, is_file will not
  */

  echo is_writable($file);
  echo '<br>';

  // Get filesize
  echo filesize($file);
  echo '<br>';

  // Create and delete a directory
  // mkdir('testing');
  // rmdir('testing');

  // Copy file
  // echo copy('file1.txt', 'file2.txt');

  // Rename file
  // rename('file2.txt', 'myfile.txt');

  // delete file
  // unlink('myfile.txt');

  // Write from file to string
  echo file_get_contents($file);
  echo '<br>';

  // Write string to file
  // file_out_contents will overwrite
  echo file_put_contents($file, 'Goodbye Wrold');
  echo '<br>';
  // so get content and add string and put back

  // open file for reading
  $handle = fopen($file, 'r');
  $data = fread($handle, filesize($file));
  echo $data;

  // Open file for writing
  $handle = fopen($file, 'w');
  $txt = 'John Doe';
  fwrite($handle, $txt);
  // to close the opening file
  fclose($handle);






 ?>