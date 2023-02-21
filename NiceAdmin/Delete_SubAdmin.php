<?php
include('conn.php');

$id = $_GET['id'];
$query = "DELETE  FROM admin WHERE id='$id' ";
$check = mysqli_query($conn, $query);
if ($check) {
    header('location:./View_All_admins.php');
} else {
    //    code to alert error
    echo "<script> alert('Error in Deletion') </script>";
}
