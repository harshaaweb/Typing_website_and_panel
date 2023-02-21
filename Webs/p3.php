
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