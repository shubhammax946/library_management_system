<?php
if (isset($_GET['id'])) {
include("connect_b.php");
$id = $_GET['id'];
$sql = "DELETE FROM b_list WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Book Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>