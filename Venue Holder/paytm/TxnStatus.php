<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

	// following files need to be included
	require_once("./lib/config_paytm.php");
	require_once("./lib/encdec_paytm.php");

	$ORDER_ID = "";
	$requestParamList = array();
	$responseParamList = array();

	if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

		// In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
		$ORDER_ID = $_POST["ORDER_ID"];

		// Create an array having all required parameters for status query.
		$requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
		
		$StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
		
		$requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

		// Call the PG's getTxnStatusNew() function for verifying the transaction status.
		$responseParamList = getTxnStatusNew($requestParamList);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>VenueFinder | Verify Payment</title>
<link rel="icon" type="image/png" sizes="16x16" href="../../layout/assets/logo.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="../../layout/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="../../layout/assets/vendors/css/base/elisyam-1.5.min.css">
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<?php
	$ORDER_ID=$_GET['id'];
	?>
	<br><h2 align="center">Transaction Status</h2><br>
	<form method="post" action="">
		<table align="center">
			<tbody>
				<tr>
					<td><label>Book ID :</label></td>
					<td><input id="ORDER_ID" tabindex="1" class="form-control" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
					</td>
					<td ><input value="Check" type="submit" class="btn btn-info"	onclick=""></td>
				</tr>
							
			</tbody>
		</table>
		<br/>
		<?php
		if (isset($responseParamList) && count($responseParamList)>0 )
		{ 
		?>
		<h2 align="center">Response of Book ID</h2>
			<hr>
		<table  style=" border: 1px solid black; background-color:white; padding:2px; border-collapse: collapse;" align="center">
			<tbody>
				<?php
					foreach($responseParamList as $paramName => $paramValue) {
				?>
				<tr align="center">
					<td style="border: 1px solid"><label><?php echo $paramName?></label></td>
					<td style="border: 1px solid"><?php echo $paramValue?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<?php
		}
		?>
	</form>
</body>
</html>