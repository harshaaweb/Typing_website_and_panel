<?php
include('./dbconfig.php');
$encodedData = file_get_contents('php://input');
$decodedData = json_decode($encodedData, true);

$UserEmail = $decodedData['email'];
$UserPW = ($decodedData['password']);

$SQL = "SELECT * FROM users WHERE email = '$UserEmail'";
$exeSQL = mysqli_query($conn, $SQL);
$checkEmail =  mysqli_num_rows($exeSQL);

if ($checkEmail != 0) {
    $arrayu = mysqli_fetch_array($exeSQL);
    if ($arrayu['password'] != $UserPW) {
        $Message = "Password is wrong";
    } else {
        $Message = "Success";
        // $token = (bin2hex(openssl_random_pseudo_bytes(32)));
        // $issuedAt = time();
        // $notBeforeUse = $issuedAt + 60 * 60;
        // $expireTime = $notBeforeUse + 60;
        // $payLoad = [
        //     'iat'  => $issuedAt,
        //     'jti'  => $tokenId,
        //     'iss'  => $serverName,     // Issuer
        //     'nbf'  => $notBeforeUse,   // Not before
        //     'exp'  => $expireTime,     // Expire
        //     'data' => $params
        // ];
        // $encodedString = 'D4566FA498443347FF145678DEA74132191FD9RF564HGFCC981256C50605678949C385F7A31ED62B8DE70E63ADEB8724AD0FCE0F751E68F71E==';
        // $secretKey = base64_decode($encodedString);
        // $encodedToken = json_encode($payLoad, $secretKey, 'HS512');
        // print($encodedToken);

    }
} else {
    $Message =   "Email does not exist";
}

$response[] = array("Message" => $Message);
echo json_encode($response);
