						<?php include("includes/db_connect.php");
						$select="select * from venue_plan where venue_id='$_SESSION[venue_id]'";
						?>
						
								<div class="modal-header">
									<h4 class="modal-title">Purchase Plan</h4>
									<button type="button" class="close" data-dismiss="modal">
										<span aria-hidden="true" style="color:black">×</span>
										<span class="sr-only">close</span>
									</button>
								</div>
								<div class="modal-body">                                                                  
									   <!--<form role="form" method="post" enctype='multipart/form-data' action="../controller/process_services.php">-->
									    <form role="form" method="post" enctype='multipart/form-data' action="checkout.php">
											<fieldset>	
												<?php 
													$id=$_GET['id'];
													$sql="select * from subscription_plan where plan_id=$id";
													$result=mysqli_query($connect,$sql);
													while($row=mysqli_fetch_array($result))
													{
														$planname=$row['plan_name'];
														$month=$row['three_month'];
														$year=$row['yearly'];
													}
												?>
												<p align="center">Please check already purchase plan</p>
											<div class="form-group">
											<label for="text"><b>Plan Name:</b></label>
													<input type="text" name="planname" id="planname" class="form-control input-lg" value="<?php echo $planname; ?>" autofocus readonly>
													<input type="hidden" name="planid" id="planid"  value="<?php echo $id; ?>">
												</div>
												<div class="form-group">
													<label for="text"><b>Select Purchase Plan:</b><sup style="font-size:16px;color:red">*</sup></label>
													<select class='form-control' id='price' name='price' required>
														<option value="">Select</option>
														<option value="<?php echo $month; ?>">Three Month - Rs.<?php echo $month; ?></option>
														<option value="<?php echo $year;?>">Annual - Rs.<?php echo $year; ?></option>
													</select>
												</div>
												<div>
													<center></br><input type="submit" class="btn btn-md btn-primary"  name="btn_purchase" value="Purchase">
																<button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
													</center></div>
											</fieldset>						
							 </form>	 
								</div> 
						   