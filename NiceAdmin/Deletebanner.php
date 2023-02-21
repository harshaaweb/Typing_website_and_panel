<?php
include('conn.php');
$id = $_GET['id'];

$query = "DELETE  FROM banner_advertise WHERE id='$id' ";
$check = mysqli_query($conn, $query);
if ($check) {
    header('location:./view_banner.php');
} else {
    //    code to alert error
    echo "<script> alert('Error in Deletion') </script>";
}
