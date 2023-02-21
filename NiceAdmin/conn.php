<?php
    $conn = mysqli_connect("wcp.dauqu.com:3306", "typing_harsha", "typing_harsha", "typing_harsha");
    if($conn){
        echo "Connected";
    }
    else{
        echo "Not Connected";
    }
?>