<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html>
<head>
  <title>System Info</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Server & File info</h1>

    <!-- this is another clean syntax to do if block  -->
    <?php if($server): ?>
      <ul class="list-group">
        <?php foreach($server as $key => $value): ?>
          <li class='list-group-item'>
            <strong><?php echo $key; ?>: </strong><?php echo $value; ?>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif; ?>

    <h1>Client & File info</h1>

    <!-- this is another clean syntax to do if block  -->
    <?php if($client): ?>
      <ul class="list-group">
        <?php foreach($client as $key => $value): ?>
          <li class='list-group-item'>
            <strong><?php echo $key; ?>: </strong><?php echo $value; ?>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif; ?>

  </div>
</body>
</html>