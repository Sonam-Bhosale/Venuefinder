 <?php include("includes/db_connect.php");?>
<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?><?php
$planid=$_POST['planid'];
$vid= $_SESSION['venue_id'];
$price=$_POST['price'];
$q="select * from subscription_plan where plan_id='$planid'";
// echo $q;
$r=mysqli_query($connect,$q);
while($row1=mysqli_fetch_array($r))
{
	if($row1['three_month']==$price)
	{
		$date = date('Y-m-d');
		$expire_date = date('Y-m-d', strtotime('+3 month', strtotime($date)));
	}
   else{
		$date = date('Y-m-d');
		$expire_date = date('Y-m-d', strtotime('+12 month', strtotime($date)));
	}
}
	if(isset($_SESSION['venue_id']))
{  if(( time() -  $_SESSION['last_login_time']) >900)
        {
            header("location:../controller/logout.php");
            echo "<script>window.location.href='../controller/logout.php';</script>";
        }
        else{
            $_SESSION['last_login_time']=time();
    ?>
<html>
<head>
   <title>Checkout Form</title> 
    <link rel="icon" type="image/png" sizes="16x16" href="../layout/assets/logo.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="../layout/assets/vendors/css/base/elisyam-1.5.min.css">
</head>

<div class="container" align="center">	
	<div class="row">
                    <div class="col-xl-12">
                            <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4 align="center" style="color:red"> Checkout Form </h4>										   
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">											
									<form method="post"  action="paytm/pgRedirect.php">
                                            <table id="sorting-table" class="table mb-0">                                             
											<tr>
                                                        <td align="center"><b>Purchase ID :</b><sup style="font-size:16px;color:red">*</sup></td>
                                                        <td><div class="form-group"><input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"  name="ORDER_ID" autocomplete="off" value="<?php echo  "PID".rand();?>"></div></td>
											        </tr>
                                                    <tr align="center">
                                                        <td><b>Vendor ID :</b><sup style="font-size:16px;color:red">*</sup></td>
                                                        <td>
                                                            <div class="form-group">
															<input id="CUST_ID" tabindex="2" maxlength="12" size="12" class="form-control" name="CUST_ID" autocomplete="off" value="<?php echo $vid;?>">
                                                            </div>
                                                        </td>
													</tr>
													<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
													<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                                                    <tr align="center">
                                                        <td><b>Pay Amount :</b><sup style="font-size:16px;color:red">*</sup></td>
                                                        <td><div class="form-group">
                                                        <input title="TXN_AMOUNT" tabindex="10"type="text" class="form-control" name="TXN_AMOUNT" value="<?php echo $price;?>">
                                                        <input title="start_date" tabindex="10" type="hidden" name="start_date"value="<?php echo $date;?>">
														<input title="Expire_date" tabindex="10" type="hidden" name="expire_date"value="<?php echo $expire_date;?>">
														<input title="plan_id" tabindex="10" type="hidden" name="plan_id" value="<?php echo $planid;?>"></div>
													</td>
													</tr> 
													<tr>
														<td colspan="2" align="center"><input value="Checkout" class="btn btn-danger" type="submit" onclick=""></td>
													</tr> 
											</table>
											<p align="center" style="color:red;font-size:18px">Note : After chekout your request of plan purchaseing  is done!!</p>
											</form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Export -->
                            </div>
                         </div>    
                        <!-- End Row -->
		
	</div>
	 <?php }
        }
        else
        {	
            echo"<script> alert('You Must Login First!!')</script>";
            echo "<script>window.location.href='../venue.php';</script>";	
        }
?>