<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
// require_once 'connection.php';
$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$subscription = $_POST["subscription"];
// $pname = $_POST["NAME"];
// $qnty = $_POST["QUANTITY"];
// $cname = $_POST["cname"];
// $pn = $_POST["pn"];
// $email = $_POST["email"];
// $al1 = $_POST["al1"];
// $city = $_POST["city"];
// $pc = $_POST["pc"];



// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = "pgResponse.php";

/*

$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //

*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
// send data to database
// $query1="insert into pinfo13012022(pname,qnty,amount,orderid) values('$pname','$qnty','$TXN_AMOUNT','$ORDER_ID')";
// if(!mysqli_query($conn,$query1));
// echo mysqli_error($conn);

// $query="insert into cinfo13012022(orderid,amount,cname,pn,email,al1,city,pc) values('$ORDER_ID','$TXN_AMOUNT','$cname','$pn','$email','$al1','$city','$pc')";
// $conn=mysqli_connect("localhost","changezi_ak","changezig26","changezi_paymentgateway");
// if(!mysqli_query($conn,$query));
// echo mysqli_error($conn);
// $pname=$_POST['NAME'];
// $qnty=$_POST['QUANTITY'];
// $query="insert into pinfo(pname,qnty) values('$pname','$qnty','')";
// if(!mysqli_query($conn,$query))
// echo mysqli_error($conn);
?>
<?php
// require_once "connection.php"; 
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST['PTP']))
    {
        if(isset($_SESSION['cart']))
        {
            foreach(($_SESSION['cart']) as $key => $value)
            {
                $subtotal=0;
                // $subtotal=$value[qnty]*$value[price];
          $query="insert into productinfo(orderid,pname,qnty,price,subtotal) values('$_POST[ORDER_ID]','$value[name]','$value[qnty]','$value[price]','$subtotal')";
          if(!mysqli_query($conn,$query))
		echo mysqli_error($conn);  
            }
            $query1="insert into customerinfo(orderid,custid,cname,pn,email,al1,city,pc) values('$_POST[ORDER_ID]','$_POST[CUST_ID]','$_POST[cname]','$_POST[pn]','$_POST[email]','$_POST[al1]','$_POST[city]','$_POST[pc]')";
             if(!mysqli_query($conn,$query1))
		     echo mysqli_error($conn);  
        }
    }
}
    ?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>