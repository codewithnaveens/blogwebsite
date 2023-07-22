<?php

include('nav.php');
?>

<!-- main-body content-->
<div class="container mt-5">

  <?php if (isset($_REQUEST['info'])) { ?>
    <?php if ($_REQUEST['info'] == "added") { ?>
      <div class="alert alert-success" role="alert">
        post has been added successfully

      </div>
    <?php } else if ($_REQUEST['info'] == "updated") { ?>
        <div class="alert alert-success" role="alert">
          post has been updated successfully
        </div>
      <?php } else if ($_REQUEST['info'] == "deleted") { ?>
          <div class="alert alert-success" role="alert">
            post has been deleted successfully

          </div>
        <?php } ?>
  <?php } ?>
  <div class="row">

    <?php
    require("logic.php");
    $query = "SELECT * FROM blogdatauser";
    $query_run = mysqli_query($conn, $query);
    $checkblog_data = mysqli_num_rows($query_run) > 0;

    if ($checkblog_data) {
      while ($row = mysqli_fetch_array($query_run)) {
        ?>


        <div class=" col-12 col-lg-4 d-flex justify-content-center">
          <div class="card mt-3" style="width:500%;">
            <img src='<?php echo $row['blog_image']; ?>' height='200' width='100' class="card-img-top" alt="card img">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $row['tittle']; ?>
              </h5>
              <p class="card-text">
                <?php echo substr($row['content'], 0, 60); ?>...
              </p>
              <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Read More<span
                  class="text-danger">&rarr;</span></a>
            </div>
          </div>
        </div>

        <?php
      }
    } else {
      echo "no blog post found";
    }

    ?>

    <!--ended  -->
  </div>
</div>