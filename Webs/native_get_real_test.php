<?php
include('./dbconfig.php');

$select = "SELECT * from newpassages ORDER BY id DESC";
$query = mysqli_query($conn, $select);
$data = mysqli_fetch_assoc($query);
echo $data['passage'];
?>