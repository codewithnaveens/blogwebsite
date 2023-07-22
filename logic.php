<!-- connection for database -->
<?php
$conn = mysqli_connect('localhost:3307', 'root', ' ', 'blogdata');
if (!$conn) {
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}


$query = "SELECT * FROM blogdatauser";
$query_run = mysqli_query($conn, $query);

// Create a new post
if (isset($_REQUEST['new_post'])) {
    $tittle = $_REQUEST['tittle'];
    $content = $_REQUEST['content'];
    $filename = $_FILES["blog_image"]["name"];
    $tempname = $_FILES["blog_image"]["tmp_name"];
    $folder = "images/upload/" . $filename;
    move_uploaded_file($tempname, $folder);
    echo "<img src='$folder' height='100' width='100'/>";
    // insert query for blog post
    $sql = "INSERT INTO blogdatauser(tittle, content,blog_image) VALUES ('$tittle','$content' ,'$folder')";
    mysqli_query($conn, $sql);
    header("location:index.php? info=added");
    exit();
}
// data get through id
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $query = "SELECT * FROM  blogdatauser  WHERE id=$id";
    $query_run = mysqli_query($conn, $query);

}
// post-update code 
if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['id'];
    $tittle = $_REQUEST['tittle'];
    $content = $_REQUEST['content'];


    $sql = "UPDATE blogdatauser SET tittle='$tittle',content='$content'WHERE id=$id";

    mysqli_query($conn, $sql);

    header("location:index.php?info=updated");
    exit();
}
//post-delete code
if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM blogdatauser WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location:index.php?info=deleted");
    exit();
}

?>