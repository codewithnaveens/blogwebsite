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
    <link rel="stylesheet" href="contact.css">


</head>

<body>

    <nav class=" navbar navbar-expand-lg navbar-light bg-dark">
        <img class="navbar-brand" src="icon.png"></img>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="create.php">MYBlogs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        
    </nav>
    <!-- contact-form -->
    <div class="container">
        <form method="post">
            <h1>Contact</h1>
            <hr>
            <label for="name"><input type="text" name="name" id="name" placeholder="What's your name?"></label>
            <label for="email"><input type="email" name="email" id="email"
                    placeholder="Please enter your email"></label>
            <label for="number"><input type="number" name="number" id="number" placeholder="Phone number"></label>
            <label for="query"><textarea name="query" id="query" cols="30" rows="10"
                    placeholder="Leave us a message."></textarea></label>
            <input type="submit" name="form_submit">
        </form>
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


<?php
$conn = mysqli_connect('localhost:3307', 'root', ' ', 'blogdata');
if (!$conn) {
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}

if (isset($_REQUEST['form_submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $query = $_REQUEST['query'];

    $sql = "INSERT INTO contactdata(name, email, number, query) VALUES ('$name','$email','$number','$query')";
    mysqli_query($conn, $sql);


}


?>