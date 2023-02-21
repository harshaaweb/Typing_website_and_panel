<?php
session_start();
include('./dbconfig.php');
// getting userprofile data from database amd display it

$encodedData = file_get_contents('php://input');
$decodedData = json_decode($encodedData, true);


if (isset($_SESSION['email'])) {
    $Session_email = $_SESSION['email'];
    echo $Session_email;
    $select = "SELECT  * from users WHERE email='$Session_email'  ";
    $query = mysqli_query($conn, $select);
    $data = mysqli_fetch_assoc($query);
         
    echo $data['email'];
} else {
    echo "session not set";
}

?>

 

