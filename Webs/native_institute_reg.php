<?php
include('./dbconfig.php');
$encodedData= file_get_contents('php://input');
$decodedData=json_decode($encodedData,true);

$instituteName = $decodedData['instituteName'];
$instituteReferenceID = strtoupper(bin2hex(random_bytes(5)));
$instituteEmail = $decodedData['instituteEmail'];
$instituteAddress = $decodedData['instituteAddress'];
$instituteLicenseNo = $decodedData['instituteLicenseNo'];
$instituteCeo = $decodedData['instituteCeo'];
$password = $decodedData['password'];

 

    $sql = "INSERT INTO `institute` (`instituteName`, `instituteReferenceID`, `instituteEmail`, `instituteAddress`, `instituteLicenseNo`, `instituteCeo`, `password`) VALUES ('$instituteName', '$instituteReferenceID', '$instituteEmail', '$instituteAddress', '$instituteLicenseNo', '$instituteCeo', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $message= "Data inserted successfully";
    }
    else{
        $message="Data not inserted";
    }
    $res[]=array("message"=>$message);
    echo json_encode($res);
 


?>