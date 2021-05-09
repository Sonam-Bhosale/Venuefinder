 <?php include("include/db_connect.php");?>
<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>>
<?php
	if(isset($_SESSION['User_Name']))
	{
		if(( time() -  $_SESSION['last_login_time']) >900)
		{
			header("location:controller/logout.php");
			echo "<script>window.location.href='controller/logout.php';</script>";
		}
		else{
			$_SESSION['last_login_time']=time();	 
	
?>
<!DOCTYPE html>
<html>
<head>
		<title>Checkout Form</title> 
        <link rel="stylesheet" href="Style/css/destination.css">
        <link rel="stylesheet" href="Style/css/base.css"> 
        <link rel="stylesheet" href="Style/css/base1.css">    
 
		<!-- Font Awesome CSS -->
        <link href="Style/css/font-awesome.min.css" rel="stylesheet">
	    <link href="Style/css/line-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="layout/assets/logo.png"> 
      <!-- JavaScript -->
  <script src="layout/assets/js/alertify.min.js"></script>
<script src="layout/assets/js/alertify.js"></script>
<link rel="stylesheet" href="layout/assets/js/alertify.min.css"/>
</head>
<body class='app-has-ajax-manager homeBody'><br><br>
<div class="wrapper-800 contact-page">
<h1 class="text-center mt30">Checkout Form</h1>
    <hr class="mt20 medium bold">
	<?php 
            $bid=$_GET['bid'];
            // $uid=2;
            $uid=$_SESSION['User'];
			$sql="select * from book_venue where book_id='$bid' and user_id='$uid'";
			$result=mysqli_query($connect,$sql);
			while($row=mysqli_fetch_array($result)){
			$trans=$row['transaction_id'];
			$advance=$row['advance_payment'];
			}
            ?>
	<form method="post" class="app-contact-form mt40 pure-form" action="paytm/pgRedirect.php">         
    		<div class="relative mb10">
				<label for="orderid"><b>ORDER ID</b><sup style="font-size:16px;color:red">*</sup></label>
				<input id="ORDER_ID" class="pure-u-1" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $bid;?>">          </div>
      	    <div>
			<div class="relative mb10">
				<label for="user-id"><b>CUSTOMER ID</b><sup style="font-size:16px;color:red">*</sup></label>
				<input id="CUST_ID" class="pure-u-1" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $uid;?>">
      	    <div>
			  <div class="relative mb10">
				<label for="amount"><b>Pay Amount:</b><sup style="font-size:16px;color:red">*</sup></label>
				<input title="TXN_AMOUNT" class="pure-u-1" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php echo $advance;?>">
				<input title="Trans_ID" tabindex="10" type="hidden" name="trans_id" value="<?php echo $trans;?>">      	    <div>
			  <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
			  <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
               <input  style="background-color:red" class="btn-flat red mt10 pure-u-1"  name="btn_contact" type="submit" value="Checkout">
		</div>
		<br>
		<p align="center" style="color:red;font-size:18px">Note : After chekout your request of venue booking is done!!</p>
											
    </form>
</div>
	 <?php 
	 }
        }
        else
        {	
            echo"<script> alert('You Must Login First !!!')</script>";
            echo "<script>window.location.href='login.php';</script>";	
        }
?>       