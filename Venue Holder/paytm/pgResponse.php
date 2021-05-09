<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once("../includes/db_connect.php");
$paytmChecksum = "";
$paramList = array();

$paramList = $_POST;
$isValidChecksum = "FALSE";
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.

if($isValidChecksum == "TRUE")
 {
 
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
			$id=$_SESSION['venue_id'];
			$user="select mobile from tbl_vendor where vendor_id='$id'";
			$r=mysqli_query($connect,$user);
			while($row=mysqli_fetch_array($r)){
				$mobile=$row['mobile'];
			}
			$sql="update venue_plan set price='$_POST[TXNAMOUNT]',status='Active',payment_mode='$_POST[PAYMENTMODE]',payment_status='$_POST[STATUS]',trans_id='$_POST[TXNID]',create_at='$_POST[TXNDATE]' where id='$_POST[ORDERID]' ";
			if(mysqli_query($connect,$sql))
			{
				echo "<script>alert('Purchase Plan Successfully!!!')</script>";
				echo "<script>alert('Transaction Successfully!!!')</script>"; 
				echo "<script>window.location.href='../plan_detail.php';</script>"; 

				$fields = array(
					"sender_id" => "FSTSMS",
					"message" => "\r\nFrom Venuefinder:\r\nYou have successfully purchase plan.\r\nThanking You !!!\r\nFor more details visit to website",
					"language" => "english",
					"route" => "p",
					"numbers" => $mobile,
				);
				
				$curl = curl_init();
				
				curl_setopt_array($curl, array(
				CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_SSL_VERIFYHOST => 0,
				CURLOPT_SSL_VERIFYPEER => 0,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => json_encode($fields),
				CURLOPT_HTTPHEADER => array(
					"authorization: cLArG39NDwsHjM7YnlJTBoepOSF1ihfdR5E0V8vWzIqumPZCgypnr4HTmwW89yut7S5oRea2xbNhiUV3",
					"accept: */*",
					"cache-control: no-cache",
					"content-type: application/json"
				),
				));
				
				$response = curl_exec($curl);
				$err = curl_error($curl);
				
				curl_close($curl);
				
				if ($err) {
				echo "cURL Error #:" . $err;
				} else {
				//echo $response;
				}
			}
			else{
			echo "Error:".$connect->error;
			}
		//echo "<b>Transaction status is success</b>" . "<br/>";
	}
	else {
		$sql="update venue_plan set status='Failed',payment_status='$_POST[STATUS]',trans_id='$_POST[TXNID]',payment_mode='$_POST[PAYMENTMODE]',create_at='$_POST[TXNDATE]' where id='$_POST[ORDERID]' ";
		echo $sql;
		if(mysqli_query($connect,$sql))
		{
			echo "<script>alert('Transaction Failed !!')</script>";
			echo "<script>window.location.href='../plan_detail.php';</script>"; 
		}
		else{
		echo "Error:".$connect->error;
		}
	}
}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>