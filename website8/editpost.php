<?php
  require('config/config.php');
  require('config/db.php');

  // retrieve data

  $id = mysqli_real_escape_string($conn, $_GET['id']);

  $query = 'SELECT * FROM posts WHERE id = ' . $id;


  // Get the Result;
  $result = mysqli_query($conn, $query);

  // Fetch data
  $post = mysqli_fetch_assoc($result);

  // Free Result
  mysqli_free_result($result);

  // update form

  if (isset($_POST['submit'])){
    $update_id = $_POST['update_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $body = $_POST['body'];

    $query = "UPDATE posts SET title = '$title',
              author = '$author',
              body = '$body' WHERE id = '$update_id';";

    if(mysqli_query($conn, $query)){
      header('Location: ' . ROOT_URL . 'post.php?id=' . $update_id);
    } else {
      echo "Cannot updated";
    }
  }

  // close connection
  mysqli_close($conn);

 ?>

<?php include "inc/header.php" ?>

<h1>Edit page</h1>
  <div class="container">
    <h1>Add Post</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $post['title'] ?>">
      </div>
      <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" value="<?php echo $post['author'] ?>">
      </div>
      <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control" ><?php echo $post['body'] ?></textarea>
      </div>
      <input type="hidden" value="<?php echo $post['id']?>" name="update_id" readonly>
      <input type="submit" name="submit" value="submit" class="btn btn-primary">
    </form>
  </div>

<?php include "inc/footer.php" ?>

