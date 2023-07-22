<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>blog website</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <?php
  include('logic.php');
  ?>
<!-- blog full-view code -->
  <div class="container mt-5">

    <?php foreach ($query_run as $row) { ?>
      <div class="bg-dark rounded-lg p-3 text-white text-center">
        <h4>
          <?php echo $row['tittle']; ?>
        </h4>
        <div class="d-flex mt-2 justify-content-center align-items-center">
          <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-light btn-sm">Edit</a>
          <form method="POST">
            <input type="text" hidden name="id" value="<?php echo $row["id"]; ?>">
            <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
          </form>
        </div>
      </div>
      <img src='<?php echo $row['blog_image']; ?>' class="mt-5 rounded mx-auto d-block" alt="card img">
      <p class="mt-5 border-left border-dark pl-3  ">
        <?php echo $row['content']; ?>
      </p>
    </div>

  <?php } ?>
  <div class="text-center mb-3">
    <a href="index.php" class="btn btn-outline-dark  ">Go Home</a>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>