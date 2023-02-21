<?php

include('./dbconfig.php');
$encodedData= file_get_contents('php://input');
$decodedData=json_decode($encodedData,true);

$name = $decodedData['name'];
$address = $decodedData['address'];
$email = $decodedData['email'];
$password = $decodedData['password'];
$cpsw = $decodedData['cpsw'];
$referenceID = strtoupper(bin2hex(random_bytes(5)));
$referBY = $decodedData['referBY'];

$insert = "INSERT INTO users(name,address,email,password ,referenceID,referBY) VALUES('$name','$address','$email','$password','$referenceID','$referBY')";

$check = mysqli_query($conn, $insert);
if($check){
    $message= "Data inserted successfully";
}
else{
    $message="Data not inserted";
}
$res[]=array("message"=>$message);
echo json_encode($res);

?>