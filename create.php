<?php
include("logic.php");
include('nav.php');
?>
<!-- post create dynamically -->
<div class="container mt-5">
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="tittle" placeholder="Blog title"
            class="form-control bg-dark text-white my-3 text-center">
        <textarea name="content" class="form-control bg-dark text-white my-3" cols="30" rows="10"></textarea>
        <label>Image:</label>
        <input type="file" name="blog_image"><br><br>

        <button name="new_post" class="btn btn-dark">Add Post</button>
    </form>

    <div class="text-center mb-3">
        <a href="index.php" class="btn btn-outline-dark  ">Go Home</a>
    </div>


</div>

<!-- Optional JavaScript -->
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