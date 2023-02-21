





<?php
session_start();
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once "dbconfig.php";

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.



if($isValidChecksum == "TRUE")
{
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		// $orderdate=$_POST['TXNDATE'];
		$status=$_POST["STATUS"];
		// $mode=$_POST["PAYMENTMODE'];
		$orderid=$_POST["ORDERID"];
		$amount=$_POST["TXN_AMOUNT"];
		if($amount == "5")
		{
			$subcription = "Beginner";
		}
		else if($amount == "15")
		{
			$subcription = "Intermediate";
		}
		else{
			$subcription = "Plus";
		}
		$email = $_SESSION['email'];
		// $subcription = $_POST['subscription'];
		$query="update users set subscription='$subscription' WHERE email='$email'";
		
		// $ordate=$_POST['TXNDATE'];
		// $txnstatus=$_POST['STATUS'];
		// $paymentmode=$_POST['PAYMENTMODE'];
		// $orderid=$_POST['ORDERID'];
		// $query="update puchase set ordate='$ordate',paymentmode=$paymentmode,txnstatus='$txnstatus' where orderid='$oderid'";
		if(!mysqli_query($conn,$query))
		echo mysqli_error($conn);
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		// $orderdate=$_POST['TXNDATE'];
		$status=$_POST["STATUS"];
		// $mode=$_POST['PAYMENTMODE'];
		$orderid=$_POST["ORDERID"];
		$amount=$_POST["TXN_AMOUNT"];
		if($amount == "5")
		{
			$subcription = "Beginner";
		}
		else if($amount == "15")
		{
			$subcription = "Intermediate";
		}
		else{
			$subcription = "Plus";
		}
		$email = $_SESSION['email'];
		$query="update users set subscription='Not Subscribed' WHERE email='$email'";
		if(!mysqli_query($conn,$query))
		echo mysqli_error($conn);

	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
