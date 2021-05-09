<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once("../include/db_connect.php");
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE")
 {
	$user="select mobile from register_user where user_id='$_SESSION[User]'";
	$r=mysqli_query($connect,$user);
	while($row=mysqli_fetch_array($r)){
		$mobile=$row['mobile'];
	}
	if ($_POST["STATUS"] == "TXN_SUCCESS") {	
	
		$select="select * from payment where bookid='$_POST[ORDERID]'";
		$r=mysqli_query($connect,$select);
		if(mysqli_num_rows($r)>0){
						echo "Already Placed";
		}else
		{
			$sql="insert into payment(bookid,payment_status,payment_amount,txn_id,payment_currency,create_at,payment_mode)values('$_POST[ORDERID]','$_POST[STATUS]','$_POST[TXNAMOUNT]','$_POST[TXNID]','$_POST[CURRENCY]','$_POST[TXNDATE]','$_POST[PAYMENTMODE]')";
			if(mysqli_query($connect,$sql))
			{
				echo "<script>alert('Booked Successfully!!!')</script>"; 
				$insert="insert into notification(id,notification)values('$_POST[ORDERID]','Book')";
				if(mysqli_query($connect,$insert)){
					//echo 'OK';
				}
				$fields = array(
								"sender_id" => "FSTSMS",
								"message" => "\r\nFrom Venuefinder:\r\nYou have successfully booked venue.\r\nThanking You !!!\r\nFor more details visit to website.",
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
		}
			$update="update book_venue set event_status='Confirmed',transaction_id='$_POST[TXNID]' where book_id='$_POST[ORDERID]' ";
			//echo $update;
			if(mysqli_query($connect,$update))
			{
				//echo "OK";
			}
			else{
			echo "Error:".$connect->error;
			}
			echo "<script>alert('Transaction Successfully!!!')</script>"; 
			echo "<script>window.location.href='../receipt.php?id=$_POST[ORDERID]';</script>"; 
		}
		else {
				$sql="insert into payment(bookid,payment_status,payment_amount,txn_id,payment_currency,create_at)values('$_POST[ORDERID]','$_POST[STATUS]','$_POST[TXNAMOUNT]','$_POST[TXNID]','$_POST[CURRENCY]','$_POST[TXNDATE]')";
				if(mysqli_query($connect,$sql))
				{
				echo "<script>alert('Transaction Failed !!')</script>";				
				echo "<script>window.location.href='../satara.php';</script>"; 
				}
			else{

			}
		}
	}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>