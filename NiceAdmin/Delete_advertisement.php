<?php
include('conn.php');
$id=$_GET['id'];

$query="DELETE  FROM advertisement WHERE id='$id' ";
$check=mysqli_query($conn,$query);
if($check){
    header('location:./View_addvertisement.php');
}else{
    //    code to alert error
    echo "<script> alert('Error in Deletion') </script>";
}
?>